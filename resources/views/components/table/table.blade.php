<table>

    <x-table.table-head is-admin="{{$isAdmin}}"></x-table.table-head>

    <x-table.table-body is-admin="{{$isAdmin}}" :urls="$urls" />

</table>
    {{$urls->links()}}
