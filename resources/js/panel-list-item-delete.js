export function deleteItem() {
    console.log('asdasdasda');
    $('a.list-item-delete').on('click', function (e) {

        e.preventDefault()
        let url = $(this).attr("href")
        alert(url)
    });
}
