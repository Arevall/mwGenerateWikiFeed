A MediaWiki extension for converting regular pages into feeds. It's based on the unmaintained WikiArticleFeeds, and only tested for MediaWiki 1.35.

This is a short readme for someone who might stumble over this.

Put the extension in /wiki/extensions/GenerateWikiFeed and add the line wfLoadExtension('GenerateWikiFeed'); to LocalSettings.php.

The extension registers two tags:

<startFeed> (Required) - Denotes the beginning of an article segment containing feed data.
<endFeed> (Required) - Denotes the end of a feed data segment.

Example: 

<startFeed />
Description of my feed.

=== Second Feed Item ===
Brand New! I just made a [[Main page|new item]]! --[[User:Anon|Anon]] 10:12, 8 December 2006 (MST)

=== First Feed Item ===
Here is the content for my first item ever. --[[User:Anon|Anon]] 08:42, 4 December 2006 (MST)
<endFeed />

Filtering:
A feed can also be filtered by adding itemTags between the header of items. The following example would only display the second feed item.

/wiki/index.php?title=Blog&action=feed&tags=filteredtag

<startFeed />
Description of my feed.

=== Second Feed Item ===
<itemTags>filteredtag, secondtag</itemTags>
Brand New! I just made a [[Main page|new item]]! --[[User:Anon|Anon]] 10:12, 8 December 2006 (MST)

=== First Feed Item ===
Here is the content for my first item ever. --[[User:Anon|Anon]] 08:42, 4 December 2006 (MST)
<endFeed />
