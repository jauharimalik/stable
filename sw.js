importScripts('./sw-toolbox.js');

const config = {
  offlinePage: '/'
};


config.filesToCache = [
 	'/',
	'hubungi',
	'manifest.json',
	'cdn/images/mobile/banner/ibuki.jpg',	
	'cdn/images/rekondisi/baru/canon-ir-3035.jpg',
	'cdn/images/harga/canon/canon-ir-2002-n-dadf.jpg',
	'https://fonts.googleapis.com/css?family=Roboto:light,medium&lang=eng',
	'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' ,
  config.offlinePage,
  '/img/offline.png',
  '/playground/',
  '/img/amp_by_example_logo.svg',
  '/playground/images/logo.svg',
  '/img/amp_logo_black.svg'
];

/**
 * Generates a placeholder SVG image of the given size.
 */
function offlineImage(name, width, height) {
  return
    `<?xml version="1.0"?>
<svg width="${width}" height="${height}" viewBox="0 0 ${width} ${height}" xmlns="http://www.w3.org/2000/svg" version="1.1">
  <g fill="none" fill-rule="evenodd"><path fill="#F8BBD0" d="M0 0h${width}v${height}H0z"/></g>
  <text text-anchor="middle" x="${Math.floor(width / 2)}" y="${Math.floor(height / 2)}">image offline (${name})</text>
<style><![CDATA[
text{
  font: 48px Roboto,Verdana, Helvetica, Arial, sans-serif;
}
]]></style>
</svg>`;
}
/**
 * Returns true if the Accept header contains the given content type string.
 */
function requestAccepts(request, contentType) {
  return request.headers.get('Accept').indexOf(contentType) != -1;
}

/**
 * ampbyexample.com fetch handler:
 *
 * - one-behind caching
 * - shows offline page
 * - generates placeholder image for unavailable images
 */
function ampByExampleHandler(request, values) {
  if (shouldNotCache(request)) {
    return toolbox.networkOnly(request, values);
  }
  // for samples show offline page if offline and samples are not cached
  if (requestAccepts(request, 'text/html')) {
    // never use cached version for AMP CORS requests (e.g. amp-live-list) or pages that shouldn't be cached
    if (request.url.indexOf("__amp_source_origin") != -1) {
      return toolbox.networkOnly(request, values);
    }
    // network first, we always want to get the latest
    return toolbox.networkFirst(request, values).catch(function() {
      return toolbox.cacheOnly(new Request(config.offlinePage), values)
        .then(function(response) {
          return response || new Response('You\'re offline. Sorry.', {
            status: 500,
            statusText: 'Offline Page Missing'
          });
        });
    });
  }
  // always try to load images from the cache first
  // fallback to placeholder SVG image if offline and image not available
  if (requestAccepts(request, 'image/')) {
    return toolbox.cacheFirst(request, values).catch(function() {
      const url = request.url;
      const fileName = url.substring(url.lastIndexOf('/') + 1);
      // TODO use correct image dimensions
      return new Response(offlineImage(fileName, 1080, 610), {
        headers: {
          'Content-Type': 'image/svg+xml'
        }
      });
    });
  } else {
    // cache first for all other requests
    return toolbox.cacheFirst(request, values);
  }
}

function shouldNotCache(request) {
  const path = new URL(request.url).pathname;
  return IGNORED_URLS.some(url => {
    //console.log('ignore? ' + path + ' ' + url + ' -> ' + url.test(path));
    return url.test(path);
  });
}

toolbox.options.debug = false;
toolbox.router.default = toolbox.networkFirst;
toolbox.router.get('/(.*)', ampByExampleHandler, {
  origin: self.location.origin
});
// network first amp runtime
toolbox.router.get('/(.*)', toolbox.networkFirst, {
  origin: 'https://cdn.ampproject.org',origin: 'https://www.vanectro.com'
});

toolbox.precache(config.filesToCache);
toolbox.precache(
  clients.matchAll({
    includeUncontrolled: true
  }).then(l => {
    return l.map(c => c.url);
  })
);

self.addEventListener('activate', () => self.clients.claim());
self.addEventListener('install', () => self.skipWaiting());