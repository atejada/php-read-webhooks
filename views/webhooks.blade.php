<!Doctype html>
<html>
    <head>
        <title>Webhooks</title>
    </head>
    <body>
    <h1>Webhooks</h1>    
        @foreach ($webhooks as $webhook)
          @foreach ($webhook as $inner_webhook)
            <p>{{ $inner_webhook->id }} | {{ $inner_webhook->date }}</p>
          @endforeach   
        @endforeach
    </body>
</html>
