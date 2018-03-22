<article @php(post_class())>
	<div class="article-tile-container">
	  <header>
	    <h2 class="title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
	    <!-- @include('partials/entry-meta') -->
	  </header>
	  <div class="excerpt">
	    @php(the_excerpt())
	  </div>
	  <div class="thumbnail">
	    {{ the_post_thumbnail('medium') }}
	  </div>
	</div>
</article>
