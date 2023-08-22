<tbody>
@foreach($urls as $url)
    <x-table.table-row-item class="row" :url="$url" is-admin="{{$isAdmin}}"/>
@endforeach
</tbody>
