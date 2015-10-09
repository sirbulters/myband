<div id="news">

    {include  file='pagination.tpl'}

<section>

    <h1>News</h1>


{foreach from=$result item=newsitem}

    <article>
        <div id="newsh1">
        <h1>{$newsitem.title} - {$newsitem.date_created}</h1>
</div>
       <div id="newsimage">
           {$newsitem.image}
       </div>
        <div id="newscontent">
        <content>{$newsitem.content}</content>
        <hr>
        </div>
    </article>

{/foreach}

<!--</div>-->

</section>

