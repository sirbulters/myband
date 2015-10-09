<section id="home">

    <h1>News</h1>

    {foreach from=$result item=newsitem}

        <article>
            <h1>{$newsitem.title}</h1>
            <content>{$newsitem.content}</content>
            <hr>
        </article>

    {/foreach}

</section>