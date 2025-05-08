@extends('layouts.app')

@section('main')
<div class="main">
    <h1 class="flex center">登録した商品</h1>

    <form id="csvForm" action="{{ route('csv.export') }}" method="POST">
        @csrf
        
        @if(session('error'))
        <div class="alert alert-danger flex center">
            {{ session('error') }}
        </div>
        @endif
        
        @foreach($transformations as $transformation)
        <div class="flex center">
            <div class="edit">
                <table class="edit__group">
                    <tr>
                        <td class="edit__group__tr__td">
                            <input type="checkbox" name="selected_items[]" value="{{ $transformation->id }}">
                            <span>{{ $transformation->merchandises_name }}</span>
                        </td>
                        <td class="edit__group-form__td">
                            <p>在庫：{{ $transformation->numbers }}</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        @endforeach

        <div class="flex center mt-4">
            <button type="button" onclick="validateForm()" class="form__button">csv出力</button>
        </div>
    </form>
    
</div>

<script>
function validateForm() {
    const checkboxes = document.querySelectorAll('input[name="selected_items[]"]:checked');
    if (checkboxes.length === 0) {
        alert('少なくとも1つの商品を選択してください');
        return false;
    }
    document.getElementById('csvForm').submit();
}
</script>
@endsection

