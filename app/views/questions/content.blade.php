<h1>Questões</h1>

		@foreach ($questions as $question)
    	<p>Pergunta Nº {{ $question->id }} </p>
    	<p>{{ $question->title }}</p>
		@endforeach
	
