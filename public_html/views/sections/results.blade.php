<section class="results position-relative" id="results">
	<div class="container">
		<div class="results__title fs-36 fw-700 text-uppercase text-center">
			наши результаты
		</div>
		{!! $modx->runSnippet('multiTV', ['tvName' => 'results', 'display' => 'all']) !!}
	</div>
</section>