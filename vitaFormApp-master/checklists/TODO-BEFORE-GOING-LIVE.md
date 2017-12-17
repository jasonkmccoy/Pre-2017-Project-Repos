## Notes about syntax used in this document

  * You will see text below surrounded by [ ].  These are the names I have given to the step that needs to be completed.  

  * You will also see text surrounded in ( ).  The links for the help with completing the step is inside these ( )

  * If you are looking at this file from the github.com repository (i.e. https://github.com/jason-hoppedupdesigns/new-project-framework/blob/master/checklists/TODO-BEFORE-GOING-LIVE.md), you will only see blue text with the name of the step to be completed (i.e. the text contained in the [ ] as mentioned above).  These are clickable links to the URL that will help you complete the step (i.e. the text inside the ( ) as mentioned above).


## Things to discuss with the client before starting a project
[Website Pre-project Checklist for the Client](http://www.aztekweb.com/blog/post/The-Website-Pre-project-Checklist-(for-the-Client).aspx)

[45 Useful Web Design Checklists and Questionnaires](http://www.smashingmagazine.com/2009/06/29/45-incredibly-useful-web-design-checklists-and-questionnaires/)

[57 Useful Web Design Checklists and Client Questionnaires](http://omnispear.com/resources/web-design-checklist)
[Using a Pre-project Checklist](http://www.webdesignerdepot.com/2010/02/using-a-pre-launch-checklist-for-your-website/)

[Website Design and Development Project Checklist](http://www.hobo-web.co.uk/website-design-tips/)


## PHP Best Practices
[30 PHP Best Practices for Beginners](http://code.tutsplus.com/tutorials/30-php-best-practices-for-beginners--net-6194)


# Pre-Launch Checklist Items To Complete

## Change Error Reporting to 0 
  * In the app/views/includes/init.php file make the following changes:
  * Comment out this line 

          ini_set('error_reporting', version_compare(PHP_VERSION,5,'>=') && version_compare(PHP_VERSION,6,'<') ?E_ALL^E_STRICT:E_ALL);
          
  * Uncomment this line 

          // error_reporting(0);

## Fix Broken Links
Check EVERY link to make sure that EVERY file is linked to the correct page.

[W3C Schools Link Validator](http://validator.w3.org/checklink)

[Broken Link Checker](http://iwebtool.com/broken_link_checker)


## Spelling and Grammar
Review all pages to make sure everything is spelled correctly and the grammar used makes sense.

[Capitalization](http://en.wikipedia.org/wiki/Capitalization)

[Writing Style](http://en.wikipedia.org/wiki/Writing_style)

[Spelling Differences](http://en.wikipedia.org/wiki/American_and_British_English_spelling_differences)


## Check website in all browsers
[Browsershots](http://browsershots.org/)

[Browserling](https://browserling.com/)

[Spoon](https://spoon.net/browsers)


## Decide on www-subdomain
[URL Rewrite](http://madskristensen.net/post/url-rewrite-and-the-www-subdomain)


## Mobile
  * MobileOK score of 75+

[MobileOK](http://validator.w3.org/mobile/)

[Good Article](http://www.hanselman.com/blog/)

[Make Your Website Mobile Friendly](MakeYourWebsiteMobileAndIPhoneFriendlyAddHomeScreenIPhoneIconsAndAdjustTheViewPort.aspx)

  * Use the 'viewport' meta tag
      * ````<meta name="viewport" content="width=device-width,initial-scale=1">````
  * Use correct input types

[HTML5 Input Types](http://html5tutorial.info/html5-contact.php)

[HTML5 Form Guidelines](http://diveintohtml5.info/forms.html)

  * Manual check using emulators

[ScreenQueries](http://beta.screenqueri.es/)

[Mobile Emulator Sites](http://www.webdesignerdepot.com/2012/11/6-free-mobile-device-emulators-for-testing-your-site/)

[Opera Mobile Emulator](http://www.opera.com/developer/mobile-emulator)

  * Test using real devices (i.e any smartphones or tablets you have access to)

## Minify CSS/JS
  * Minify the style.min.css file

[CSS Minifier](http://cssminifier.com/)

  * Minify the scripts.min.js file

[Online JavaScript Compression Tool](http://jscompress.com/)


## Analytics
[Google Analytics](https://support.google.com/analytics/answer/1008080?hl=en)

1. Add the Google Analytics .html file to the root of the project
2. Add the Google Analytics code to the footer.php file
3. Add the Google Analytics code to the head.php file

## Uptime monitoring

[Uptime Robot] (http://uptimerobot.com/)

[GotSiteMonitor] (http://www.gotsitemonitor.com/)

## Traffic analysis
[Stat Counter](http://statcounter.com/)

[Clicky](http://clicky.com/)


## Performance Tests
  * Google Page Speed score of 90+

[Google Page Speed](https://developers.google.com/speed/pagespeed/)

  * Yahoo YSlow score of 85+

[Yahoo YSlow](http://yslow.org/)

  * Optimize HTTP headers

[Red Bot](https://redbot.org/)


## Optimize/Compress Images
  * Use the ImageOptim program in the dock
  * Yahoo! Smush.it

[Yahoo! Smush.it](http://www.smushit.com/ysmush.it/)

  * Puny PNG

[Puny PNG](http://punypng.com/)


## Favicons
[Favicon Generator](http://realfavicongenerator.net/)

[Favicon Cheat Sheet](http://github.com/audreyr/favicon-cheat-sheet)


## Usability
  * HTML5 compatibility check

[Compact Inspector](http://ie.microsoft.com/testdrive/HTML5/CompatInspector/)

[Modern IE](http://www.modern.ie/report)

[Modernizr](http://modernizr.com/)

  * Custom 404 page

[More Useful 404](http://www.alistapart.com/articles/amoreuseful404/)

  * Use friendly URLs

[URL Best Practices](http://www.seomoz.org/blog/11-best-practices-for-urls)

[URL Rewrite in Apache](http://httpd.apache.org/docs/current/mod/mod_rewrite.html)

  * @media print.css

[Setup a print.css file](http://coding.smashingmagazine.com/2011/11/24/how-to-set-up-a-print-style-sheet/)

  * Search feature

[Google Custom Search](http://www.google.com/cse/)

[Open Search](http://www.opensearch.org/Home)

  * Environment Integration

[Windows 8 integration](http://msdn.microsoft.com/en-us/library/ie/hh781490%28v=vs.85%29.aspx)

[Safari iOS integration](https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html)

[Windows 8 Site Tiles](http://www.buildmypinnedsite.com/en)


## Semantics
  * Add meaning with Microdata

[Schema Creator](http://schema-creator.org/)

[Schema Cheat Sheet](http://schema.org/)


  * Check the semantics

[W3C Semantics Checker](http://www.w3.org/2003/12/semantic-extractor.html)


## SEO
  * SenSEO score of 85+

[SenSEO](https://addons.mozilla.org/en-US/firefox/addon/senseo/)

  * Google Rich Snippets

[Google Snippets Creator](http://schema.org/docs/gs.html)

[Google Snippets Tester](http://www.google.com/webmasters/tools/richsnippets)


## Humans/Robots Files
  * Edit the info in the humans.txt file

[Create humans.txt online](http://humanstxt.org/)

  * Edit the info in the robots.txt file

[Robots.txt Tutorial](http://tools.seobook.com/robots-txt/)

[Create robots.txt online](http://www.robotsgenerator.com/)


## Sitemap
[Google Sitemap Creator](https://www.xml-sitemaps.com/)

[XML Sitemaps Creator](http://www.xml-sitemaps.com/)


## Code quality
  * HTML validation

[W3C HTML validator](http://validator.w3.org/)

[Dr. Watson](http://watson.addy.com/)

  * CSS validation

[W3C CSS validator](http://jigsaw.w3.org/css-validator/)

  * Run CSS Lint

[Run CSS Lint online](http://csslint.net/)

  * Run JSLint/JSHint

[Run JSLint online](http://jslint.org/)

[Run JSHint online](http://jshint.com/)

  * World ready

[W3C Internationalization Checker](http://validator.w3.org/i18n-checker/)

  * Automated testing

[Testomato](http://www.testomato.com/)


## Accessibility
  * Accessibility validation

[Common Accessibility Problems and Solutions](http://accessibility.oit.ncsu.edu/accessibleu/problems.html)

[IDI Web Accessibility Checker](http://achecker.ca/checker/index.php)

[Screen Reader Testing](http://www.nvda-project.org/)

  * Color contrast

[Check color contrast online](http://www.checkmycolours.com/)

  * WAI-ARIA Landmarks

[USING WAI-ARIA Landmarks](http://accessibility.oit.ncsu.edu/blog/2011/06/30/using-aria-landmarks-a-demonstration/)

[Guide to WAI-ARIA](http://www.alistapart.com/articles/the-accessibility-of-wai-aria/)

[Practical Examples](http://www.punkchip.com/2010/11/aria-basic-findings/)


## Security
  * Follow Best Practices

[A Safe Web Security Analyzer](https://asafaweb.com/)

[OWASP Top 10 Security Risks](https://www.owasp.org/index.php/Category:OWASP_Top_Ten_Project)

[OWASP Security Cheat Sheets](https://www.owasp.org/index.php/Cheat_Sheets)

  * Cross-site scripting

[XSS Cheat Sheet](https://www.owasp.org/index.php/XSS_(Cross_Site_Scripting)_Prevention_Cheat_Sheet)

[DOM based XSS Cheat Sheet](https://www.owasp.org/index.php/DOM_based_XSS_Prevention_Cheat_Sheet)

[Free XSS Scanner](http://www.acunetix.com/cross-site-scripting/scanner/)

  * Cross-site request forgery

[What is Cross-site request forgery](http://www.codinghorror.com/blog/2008/09/cross-site-request-forgeries-and-you.html)

[Cross-site request forgery Cheat Sheet](https://www.owasp.org/index.php/Cross-Site_Request_Forgery_(CSRF)_Prevention_Cheat_Sheet)

  * Secure connection (SSL)

[Setup SSL on Apache](http://www.digicert.com/ssl-certificate-installation-apache.htm)

[SSL Server Test](https://www.ssllabs.com/ssltest/)

  * HTTP Strict Transport Security

[MDN Overview](https://developer.mozilla.org/en-US/docs/Security/HTTP_Strict_Transport_Security)

[OWASP Overview](https://www.owasp.org/index.php/HTTP_Strict_Transport_Security)

  * Enable Content Security Policy

[Content Security Policy](http://www.html5rocks.com/en/tutorials/security/content-security-policy/)

[MDN Guide](https://developer.mozilla.org/en-US/docs/Security/CSP/Using_Content_Security_Policy)

[OWASP Overview](https://www.owasp.org/index.php/Content_Security_Policy)

[CSP Tester](https://github.com/oxdef/csp-tester)


## Social Media
  * Open Graph protocol

[Open Graph Cheat Sheet](http://ogp.me/)

  * Twitter Cards

[Twitter Cards Documentation](https://dev.twitter.com/docs/cards)

[Twitter Cards Preview Tool](https://dev.twitter.com/docs/cards/preview)

  * Facebook Insights

[Facebook Insights How To](https://developers.facebook.com/docs/insights/)

  * Google+

[Google Authorship](https://plus.google.com/authorship)

[Google Publisher](https://support.google.com/webmasters/answer/1708844?hl=en)


## Reduce the Number of Database Queries

[Strace] (http://sourceforge.net/projects/strace/)



## Helpful Links

[Website Developer Checklist](http://webdevchecklist.com/)

[20 points you should know and do before starting a new project](http://adrien-heury.net/designers-checklists/index.html)

[10 points I always keep in mind while designing](http://adrien-heury.net/designers-checklists/index.html)

[Ultimate List of Web Design Checklists](http://www.1stwebdesigner.com/design/web-design-checklists/)

[Web Designer Site Launch Checklist](http://webdesign.tutsplus.com/articles/a-web-designers-site-launch-checklist-including-portable-formats--webdesign-11107)

[Website Checklist Project Workflow](http://www.farreachinc.com/blog/far-reach/2012/10/02/website-checklist-2-project-workflow)

[Planning Your Website Redesign](http://www.farreachinc.com/blog/far-reach/2012/08/31/website-checklist-1-planning-website-redesign)
