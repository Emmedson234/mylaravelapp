<h1>Customers</h1>

<ul>
<?php
    foreach ( $clist as $customer ) {
        echo '<li>'.$customer.'</li>';
    }
?>
</ul>

<ul>
@foreach($clist as $customer)
    <li>{{$customer}}</li>
    @endforeach
</ul>
