<div id="tour">

    {include  file='pagination2.tpl'}

    <h1>Tour</h1>
{*
    {foreach from=$result item=touritem}

        <article>
            <h1>{$touritem.nametour}</h1>
            <content>{$touritem.country}</content>
            <content>{$touritem.city}</content>
            <content>{$touritem.adres}</content>
            <content>{$touritem.date}</content>
            <hr>
        </article>

    {/foreach}*}

<div id="tourtable"></div>
    <article>
    <table style="width:100%">
        <tr>
            <th>TOUR</td>
            <th>ADDRESS</td>
            <th>COUNTRY</td>
            <th>DATE</td>
        </tr>
        {foreach from=$result item=touritem}
        <tr>
            <td style="font-size:14px">{$touritem.nametour}</td>
            <td style="font-size:14px">{$touritem.adres}</td>
            <td style="font-size:14px">{$touritem.country}</td>
            <td style="font-size:14px">{$touritem.date}</td>
        </tr>
        {/foreach}
    </table>
    </article>

</div>

</div>