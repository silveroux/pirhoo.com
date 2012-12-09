{include file=$template_output_format|cat:"/sub/header.tpl"}


	<div id="content" role="main">
		
		<div class="overflow">
			<section class="screen active" id="me">
				<h1 class="hidden">
					{t}Pierre Romera{/t}
					<img src="./pirhoo-core/image/arrow-right.png" class="arrow" alt="" />
					{t}Qui suis-je ?{/t}
				</h1>

				<h2>
					{t escape=no}Directeur Général et co-fondateur de <a href="http://jplusplus.org" class="open-window">Journalism++</a>{/t}
				</h2>
				<p class="desc">
					{t escape=no}Journalism++ accompagne les rédactions dans leur transition vers le web des données.{/t}
				</p>

				<h2>
					{t escape=no}Enseignant à l'<a href="http://www.journalisme.sciences-po.fr" target="_blank">École de Journalisme de Science Po</a>{/t}
				</h2>
				<p class="desc">{t}J'initie les journalistes au langage et au développement numérique.{/t}</p>

				<h2>
					{t escape=no}Intervenant à l'<a href="http://esj-lille.fr/" class="open-window">ESJ Lille</a> et au <a href="http://www.cfpj.com/ecole-de-journalisme/" class="open-window">CFJ Paris</a>{/t}
				</h2>
				<p class="desc">
					{t escape=no}J'interviens en école, en entreprise et en conférence pour parler des sujets liés au <a href="https://fr.wikipedia.org/wiki/Journalisme_de_donn%C3%A9es" class="open-window">Journalisme de données</a>.{/t}
				</p>

				<h2>{t}Développeur Freelance{/t}</h2>
				<p class="desc">
					{t}Node.js, Express, Underscore, API, WordPress, jQuery, PHP, HTML5, Data Visualisation, ...{/t}
				</p>

				<div class="before">
					<h2>
						{t escape=no}Directeur Général Délégué chez <a href="http://owni.fr" class="open-window">OWNI</a>/<a href="http://22mars.com" class="open-window">22mars</a>{/t}
					</h2>
					<p class="desc">
						{t}OWNI est un media en ligne, pionnier français du Data Journalism.{/t}
					</p>
				</div>
				
				<br class="breaker" />
			</section>


			<section class="cascade screen" id="works">
				<h1>
					{t}Pierre Romera{/t}
					<img src="./pirhoo-core/image/arrow-right.png" class="arrow" alt="" /> 
					{t}Mes travaux{/t}
				</h1>
			    <ul>
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


			            {if $post.type != "article" && $image != ""}
			                <li class="vignette {$post.type}" data-type="{$post.type}">
			                    <a href="{$permalink}" class="preview open-window">                    
			                        <img src="./pirhoo-core/library/timthumb.php?src={$image}&amp;q=100&amp;w=150" width="150" alt="">

				                </a>	                    
			                    <a href="{$permalink}" class="open-window title">
			                    	<span class="icon {$post.type}"></span>
			                    	{$post.title}
			                    </a>
			                </li>
			            {/if}
			            		            
			        {/foreach}
			    </ul>
			    <br class="breaker" />
		    </section>

		    <section class="cascade screen" id="articles">
				<h1>
					{t}Pierre Romera{/t}
					<img src="./pirhoo-core/image/arrow-right.png" class="arrow" alt="" />
					{t}Mes articles{/t}
				</h1>
		    <ul>
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


            {if $post.type == "article" && $image != ""}
              <li class="vignette {$post.type}" data-type="{$post.type}">
                  <a href="{$permalink}" class="preview open-window">                    
                      <img src="./pirhoo-core/library/timthumb.php?src={$image}&amp;q=100&amp;w=150" width="150" alt="">
              
                      {* <img src="./pirhoo-core/library/timthumb.php?src=http://pirhoo.dev/Personal/Pirhoo.v2/pirhoo-core/image/penguin_nb.jpg&amp;q=100&amp;w=150" width="150" alt=""> *}

                </a>	                    
                  <a href="{$permalink}" class="open-window title">
                  	<span class="icon {$post.type}"></span>
                  	{$post.title}
                  </a>
              </li>
            {/if}
            
	            
	        {/foreach}
		    </ul>
		    <br class="breaker" />
	    </section>
	  </div>
    <h1 id="tracker"></h1>
		<ul id="sub-menu">
			<li data-target="me"><img src="./pirhoo-core/image/me.png"/ alt=""></li>
			<li data-target="works"><img src="./pirhoo-core/image/works.png"/ alt=""></li>
			<li data-target="articles" class="articles"><img src="./pirhoo-core/image/articles.png"/ alt=""></li>
		</ul>
	</div>

{include file=$template_output_format|cat:"/sub/footer.tpl"}
