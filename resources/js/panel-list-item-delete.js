export function deleteItem() {
    console.log('asdasdasda');
    $('a.list-item-delete').on('click', function (e) {

        e.preventDefault()
        let url = $(this).attr("href")
        if (url !== null) {

            let confirmation = confirm("Bu kaydı silmek istediğinize emin misiniz?");

            if (confirmation == true) {

                axios.delete(url).then(res => {

                    $(this).parents('tr').fadeOut();

                    alert(res.data);

                }).catch(err => {

                    console.log(err)

                });

            }
        }
    })
}
