<section>
<!--als er niks gevonden niet. niet showen-->
    {if $articles_result->num_rows > 0}

    <h1>News</h1>

    {/if}

    {foreach from=$articles_result item=newsitem}

        <article>
            <h1>{$newsitem.id} {$newsitem.title}</h1>
            <content>{$newsitem.content}</content>
            <hr>
        </article>

    {/foreach}
    <!--als er niks gevonden niet. niet showen-->
    {if $tourdata_result->num_rows > 0}

    <h1>Tour</h1>

    {/if}

    {foreach from=$tourdata_result item=touritem}

        <article>
            <h1>{$touritem.nametour}  </h1>
            <content>{$touritem.city} ({$touritem.adres} {$touritem.country})</content>
            <hr>
        </article>

    {/foreach}
    <!--als er niks gevonden niet. niet showen-->
    {if $musicdata_result->num_rows > 0}

    <h1>Music</h1>

    {/if}

    {foreach from=$musicdata_result item=musicitem}

    <article>
        <h1>{$musicitem.musictitle}</h1>
        <content>{$musicitem.musicembed}</content>
        <hr>
    </article>

    {/foreach}


</section>