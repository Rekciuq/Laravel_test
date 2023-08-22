<div class="inline">
    <h1>Welcome back, {{$role}}.</h1>
    <a class="btn" href="http://127.0.0.1:8000/logout">LOGOUT</a>
</div>

<style>
    .inline {
        display:flex;
        align-items: center;
        justify-content: space-between;
    }

    .btn {
        border: 1px solid;
        border-radius: 10px;
        font-size: 18px;
        font-weight: 700;
        cursor: pointer;
        padding: 0 5px;

    }
</style>
