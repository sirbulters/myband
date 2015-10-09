<ul>

    {if $page_nr != 1}
        <li></li><a href="?page=music&page_nr={$page_nr-1}">&laquo;</a></li>
    {/if}

    {for $page=1 to $pages}
        {if $page == $page_nr}
            <li style="font-size: 120%;">{$page}</li>

        {else}
            <li><a href="?page=music&page_nr={$page}">{$page}</a></li>
        {/if}

    {/for}

    {if $page_nr != $pages}
        <li></li><a href="?page=music&page_nr={$page_nr+1}">&raquo;</a></li>
    {/if}
</ul>