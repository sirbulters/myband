<div id="music">

    {include  file='pagination3.tpl'}

    <h1>Music</h1>

    {foreach from=$result item=musicitem}

        <article>
            <h1>{$musicitem.musictitle}</h1>
            <content>{$musicitem.musicembed}</content><br>
            <p>Lyrics</p>
            <content>{$musicitem.musiclyric}</content>
            <hr>
        </article>


    {/foreach}


</div>