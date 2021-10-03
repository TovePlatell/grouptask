<form action="/" method="get">
    <label for="search">Sök blog</label>
    <input type="hidden" name="post_type" value="post" />
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
    <button type='submit'>Sök</button>
</form>