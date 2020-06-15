<?php
//load file security
$ip = getenv('HTTP_CLIENT_IP')?:
getenv('HTTP_X_FORWARDED_FOR')?:
getenv('HTTP_X_FORWARDED')?:
getenv('HTTP_FORWARDED_FOR')?:
getenv('HTTP_FORWARDED')?:
getenv('REMOTE_ADDR');
$sql = "select * from blokir where ip='$ip'";
$result = $db->num_rows($sql);
header("Content-Type: text/plain");
?>
# For syntax checking, see:
# http://www.vanectro.com

User-agent: HTTrack Website Copier
Disallow: /

User-agent: Wget
Disallow: /

User-agent: eCatch
Disallow: /

User-agent: WebCopier
Disallow: /

User-agent: SurfOffline
Disallow: /

User-agent: WebsiteRipper
Disallow: /

User-agent: Web2Disk
Disallow: /

User-agent: Teleport
Disallow: /

User-agent: TeleportPro
Disallow: /

User-agent: EmailCollector
Disallow: /

User-agent: EmailSiphon
Disallow: /

User-agent: WebBandit
Disallow: /

User-agent: WebZIP
Disallow: /

User-agent: WebReaper
Disallow: /

User-agent: WebStripper
Disallow: /

User-agent: Web Downloader
Disallow: /

User-agent: Offline Explorer Pro
Disallow: /

User-agent: Offline Commander
Disallow: /

User-agent: Leech
Disallow: /

User-agent: WebSnake
Disallow: /

User-agent: BlackWidow
Disallow: /

User-agent: HTTP Weazel
Disallow: /

User-agent: Acrobat\ Webcapture
Disallow: /

User-agent: Web Dumper
Disallow: /

User-agent: AhrefsBot
User-agent: Baiduspider
User-agent: EasouSpider
User-agent: Ezooms
User-agent: YandexBot
User-agent: MJ12bot
User-agent: SiteSucker
User-agent: HTTrack
Disallow: /


Disallow: /ar/
Disallow: /be/
Disallow: /bg/
Disallow: /ca/
Disallow: /cs/
Disallow: /da/
Disallow: /de/
Disallow: /el/
Disallow: /es/
Disallow: /et/
Disallow: /fa/
Disallow: /fi/
Disallow: /fr/
Disallow: /ga/
Disallow: /gl/
Disallow: /hi/
Disallow: /hr/
Disallow: /hu/
Disallow: /id/
Disallow: /is/
Disallow: /it/
Disallow: /iw/
Disallow: /ja/
Disallow: /ko/
Disallow: /lt/
Disallow: /lv/
Disallow: /mk/
Disallow: /ms/
Disallow: /mt/
Disallow: /nl/
Disallow: /no/
Disallow: /pl/
Disallow: /pt/
Disallow: /ro/
Disallow: /ru/
Disallow: /sk/
Disallow: /sl/
Disallow: /sq/
Disallow: /sr/
Disallow: /stale/
Disallow: /sv/
Disallow: /th/
Disallow: /tl/
Disallow: /tr/
Disallow: /uk/
Disallow: /vi/
Disallow: /zh-CN/
Disallow: /zh-TW/

User-agent: ia_archiver
Disallow: /

User-agent: duggmirror
Disallow: /

User-agent: BlackWidow
Disallow: /

User-agent: Bolt
Disallow: /

User-agent: ChinaClaw
Disallow: /

User-agent: Custo
Disallow: /

User-agent: DIIbot
Disallow: /

User-agent: DISCo
Disallow: /

User-agent: eCatch
Disallow: /

User-agent: EirGrabber
Disallow: /

User-agent: EmailCollector
Disallow: /

User-agent: EmailSiphon
Disallow: /

User-agent: EmailWolf
Disallow: /

User-agent: ExtractorPro
Disallow: /

User-agent: EyeNetIE
Disallow: /

User-agent: FlashGet
Disallow: /

User-agent: GetRight
Disallow: /

User-agent: GetWeb!
Disallow: /

User-agent: Go!Zilla
Disallow: /

User-agent: Go-Ahead-Got-It
Disallow: /

User-agent: GrabNet
Disallow: /

User-agent: Grafula
Disallow: /

User-agent: HMView
Disallow: /

User-agent: HTTP::Lite
Disallow: /

User-agent: HTTrack Website Copier
Disallow: /

User-agent: HTTP Weazel
Disallow: /

User-agent: id-search
Disallow: /

User-agent: InterGET
Disallow: /

User-agent: InternetSeer
Disallow: /

User-agent: IRLbot
Disallow: /

User-agent: Java
Disallow: /

User-agent: JetCar
Disallow: /

User-agent: larbin
Disallow: /

User-agent: Leech
Disallow: /

User-agent: libwww 
Disallow: /

User-agent: libwww-perl
Disallow: /

User-agent: linkwalker
Disallow: /

User-agent: lwp-trivial
Disallow: /

User-agent: Maxthon$
Disallow: /

User-agent: microsoft
Disallow: /

User-agent: MIDown
Disallow: /

User-agent: Mister
Disallow: /

User-agent: MSFrontPage
Disallow: /

User-agent: Navroad
Disallow: /

User-agent: NearSite
Disallow: /

User-agent: NetAnts
Disallow: /

User-agent: NetSpider
Disallow: /

User-agent: NetZIP
Disallow: /

User-agent: Nutch
Disallow: /

User-agent: Octopus
Disallow: /

User-agent: Offline Navigator
Disallow: /

User-agent: Offline Explorer Pro
Disallow: /

User-agent: Offline Commander
Disallow: /

User-agent: PageGrabber
Disallow: /

User-agent: Papa
Disallow: /

User-agent: pavuk
Disallow: /

User-agent: PeoplePal
Disallow: /

User-agent: PHPCrawl
Disallow: /

User-agent: Rippers
Disallow: /

User-agent: SeaMonkey$
Disallow: /

User-agent: SmartDownload
Disallow: /

User-agent: Steeler
Disallow: /

User-agent: SuperBot
Disallow: /

User-agent: SuperHTTP
Disallow: /

User-agent: TeleportPro
Disallow: /

User-agent: Teleport
Disallow: /

User-agent: WebBandit
Disallow: /

User-agent: WebCopier
Disallow: /

User-agent: Web Downloader
Disallow: /

User-agent: WebFetch
Disallow: /

User-agent: WebLeacher
Disallow: /

User-agent: WebReaper
Disallow: /

User-agent: WebSauger
Disallow: /

User-agent: WebSnake
Disallow: /

User-agent: WebStripper
Disallow: /

User-agent: Web Sucker
Disallow: /

User-agent: WebWhacker
Disallow: /

User-agent: WebZIP
Disallow: /

User-agent: ZyBorg
Disallow: /

User-agent: Zeus
Disallow: /


User-agent: Googlebot
Disallow: /*.php$
Disallow: /*.js$
Disallow: /*.inc$
Disallow: /*.css$
Disallow: /*?
Disallow: /*?replytocom
Disallow: /*?comments=true$
Disallow: /*?postcomment=true$
Disallow: /*page=*
Disallow: /*pg=*
Disallow: /*p=*

Sitemap: https://www.vanectro.com/sitemap_index.xml