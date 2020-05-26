<!-- 
データベースで入っているデータを引っ張ってこれる 
Controllerの中の$values
     -->

@foreach($values as $value)
{{$value->id}}<br>
{{$value->text}}<br>

@endforeach