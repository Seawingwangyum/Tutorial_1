/*<pre>*/
/* Override Variables */
var WGEPinitialized = true;
var ACGinitialized = true;
var overrideNamespaces;
var overrideGroups;
var cancelAnime;
var cancelSearchswitch;

/* Include Namespace and Group Information */
// Searchswitch is breaking things, don't load it till we're finished coding it.
//includeJS( ( overrideNamespaces ? overrideNamespaces : 'MediaWiki:Namespaces.js' ) );
//includeJS( ( overrideGroups ? overrideGroups : 'MediaWiki:Groups.js' ) );

if( skin == 'monobook' && !cancelAnime ) importScriptPage( 'MediaWiki:Anime-Monobook-Accesstips.js', 'anime' );
//if( skin == 'monobook' && !cancelSearchswitch ) includeJS( 'MediaWiki:Searchswitch.js', 'anime' );
//if( skin == 'monobook' ) includeJS( 'MediaWiki:Portlet.js', 'anime' );
//if( skin == 'monobook' ) includeJS( 'MediaWiki:Hacks.js', 'anime' );

/*</pre>*/

/*<big>'''[[MediaWiki:Misc.js]]'''</big>*/
{{MediaWiki:Misc.js}}
/*<big>'''[[MediaWiki:Sitenotice.js]]'''</big>*/
{{MediaWiki:Sitenotice.js}}
/*<big>'''[[MediaWiki:ShowHide.js]]'''</big>*/
{{MediaWiki:ShowHide.js}}
/*<big>'''[[MediaWiki:TabView.js]]'''</big>*/
{{MediaWiki:TabView.js}}