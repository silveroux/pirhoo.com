<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:wfw="http://wellformedweb.org/CommentAPI/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:atom="http://www.w3.org/2005/Atom"
	xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
	xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
	>

	<channel>
		<title>Pierre Romera (Pirhoo)</title>
		<atom:link href="{$smarty.const.SHARE_URL}/feed/" rel="self" type="application/rss+xml" />
		<link>{$smarty.const.SHARE_URL}</link>
		<description>Les derniers travaux de Pierre Romera.</description>

		<lastBuildDate>{$posts[0].date}</lastBuildDate>
		<language>fr</language>
		<sy:updatePeriod>hourly</sy:updatePeriod>
		<sy:updateFrequency>1</sy:updateFrequency>
	

		{foreach from=$posts item=post} 		

            {if $post.custom_fields.url[0] != ""}

                {assign var="permalink" value=$post.custom_fields.url[0]}

            {else}

                {assign var="permalink" value=$post.url}

            {/if}
			            

            {if $post.custom_fields.image[0] != ""}

                {assign var="image" value=$post.custom_fields.image[0]}

            {elseif $post.custom_fields.Image[0] != ""}

                {assign var="image" value="http://branchetonsonotone.com/"|cat:$post.custom_fields.Image[0]}

            {else}

                {assign var="image" value=$post.thumbnail}

            {/if}


			<item>
				<title>{$post.title}</title>

				<link>{$permalink}</link>	
				<pubDate>{$post.date}</pubDate>
				<dc:creator>Pirhoo</dc:creator>
				<category><![CDATA[{$post.type}]]></category>

				<guid isPermaLink="true">{$permalink}</guid>
				<description><![CDATA[<a href="{$permalink}"><img width="200" src="{$image}" alt="Voir plus" /></a>]]></description>								
			</item>
		{/foreach}
	</channel>
</rss>
