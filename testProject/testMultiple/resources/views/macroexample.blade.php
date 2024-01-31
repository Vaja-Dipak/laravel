<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <div class="form-group">
            <label for="bank_name">Bank Name </label>
            {{ Form::selectBank("bank_name", $merchant['paymentInfo']->bank_name ?? null,["class"=>"form-control"]) }}

            &emsp;&emsp;

            <label for="country">Country </label>
            {{ Form::selectCountry("country", $merchant['paymentInfo']->country ?? null,["class"=>"form-control"]) }}
        </div>
    </form>
</body>

</html>