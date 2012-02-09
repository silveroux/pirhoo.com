{include file=$template_output_format|cat:"/sub/header.tpl"}


	<div id="content" role="main">
		
		<section class="screen active" id="me">
			<h1>Pierre Romera <img src="./pirhoo-core/image/arrow-right.png" class="arrow" alt="" /> Qui suis-je ?</h1>

			<h2>Directeur Général et co-fondateur de <a href="http://jplusplus.org" class="open-window">Journalism++</a></h2>
			<p class="desc">Journalism++ donne du sens aux données en construisant des applications qui aident les gens à prendre de meilleures décisions.</p>

			<h2>Intervenant à l'<a href="http://esj-lille.fr/" class="open-window">ESJ Lille</a> et au <a href="http://www.cfpj.com/ecole-de-journalisme/" class="open-window">CFJ Paris</a></h2>
			<p class="desc">J'interviens en école, en entreprise et en conférence pour parler des sujets liés au <a href="https://fr.wikipedia.org/wiki/Journalisme_de_donn%C3%A9es" class="open-window">Journalisme de données</a>.</p>


			<h2>Développeur Freelance</h2>
			<p class="desc">WordPress, jQuery, Sencha, PHP, HTML5, Data Visualisation, ...</p>

			<div class="before">
				<h2>Directeur Général Délégué chez <a href="http://owni.fr" class="open-window">OWNI</a>/<a href="http://22mars.com" class="open-window">22mars</a></h2>
				<p class="desc">OWNI est un media en ligne, pionnier français du Data Journalism.</p>
			</div>
			
			<br class="breaker" />
		</section>


		<section class="cascade screen" id="works">
			<h1>Pierre Romera <img src="./pirhoo-core/image/arrow-right.png" class="arrow" alt="" /> Mes travaux</h1>
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
		                        <img src="./pirhoo-core/library/timthumb.php?src={$image}&w=150" alt="">
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
			<h1>Pierre Romera <img src="./pirhoo-core/image/arrow-right.png" class="arrow" alt="" /> Mes articles</h1>
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
		                        <img src="{$image}" alt="">
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

{include file=$template_output_format|cat:"/sub/footer.tpl"}
