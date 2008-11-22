<!-- Subscriptions.tpl -->


<h3>Subscriptions</h3>
{foreach from=$subs item=foo}
   <a href="{$foo->url}" title="subscribe"><img src="/images/feed-icon-10x10.png" alt="(feed)"></a>
<a href=""> {$foo->name}</a><br />
{/foreach}
