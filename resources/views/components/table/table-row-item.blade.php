@php
    use App\Helpers\getUrlByIdHelper;
@endphp

<tr>
    <td>{{Str::limit($url->url, 50)}}</td>
    <td class="text-center">{{getUrlByIdHelper::getUrlById($url->id)->status}}</td>
    @if($isAdmin)
        @if($url->title === 'failed')
            <td></td>
        @else
        <td>{{Str::limit($url->title, 50)}}</td>
        @endif
    @endif
</tr>
<style>
    .text-center {
        text-align: center;
    }
</style>
