function delete_alert(button) {
    if (window.confirm('本当に削除しますか？')) {
        button.closest('form').submit();
        return true;
    } else {
        window.alert('キャンセルされました');
        return false;
    }
}