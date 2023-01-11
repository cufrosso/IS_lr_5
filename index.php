<script>
    let arr_size;
    function rand(){
        arr_size = Number(prompt('Введите размер массива'));
        if (!arr_size || arr_size <= 0){
            alert('Некорректный ввод');
            return 0;
        }
        $("#create").prop("disabled", true);
        $.ajax({
            url: "rand.php",
            type: "POST",
            cache: false,
            async: false,
            data: {"size": arr_size},
            dataType: "html",
            success: function(data){
                $("#create").prop("disabled", false);
                $("#sort").prop("disabled", false);
            }
        });
    }
    function get_value(arr_key){
        let result;
        $.ajax({
            url: "get_val.php",
            type: "POST",
            cache: false,
            async: false,
            data: {"arr_key": arr_key},
            dataType: "text",
            success: function(data){
                result = parseInt(data);
            }
        });
        return result;
    }
    function swap(arr_key_1, arr_key_2){
        $.ajax({
            url: "swap.php",
            type: "POST",
            cache: false,
            async: false,
            data: {"arr_key_1": arr_key_1, "arr_key_2": arr_key_2},
            dataType: "html",
            success: function(data){}
        });
    }

    function bubble_sort(arr) {
        for (let j = arr.length - 1; j > 0; j--) {
            for (let i = 0; i < j; i++) {
                if (arr[i] > arr[i + 1]) {
                    let temp = arr[i];
                    arr[i] = arr[i + 1];
                    arr[i + 1] = temp;
                }
            }
        }
    }

    function sifting(arr_key){
        if (2*arr_key + 1 >= arr_size){
            return;
        }
        let parent = get_value(arr_key);
        let left_child = get_value(2*arr_key + 1);
        if (2*arr_key + 2 == arr_size) {
            if (parent < left_child) {
                swap(arr_key, 2 * arr_key + 1);
            }
        }
        else{
            let right_child = get_value(2*arr_key + 2);
            if (left_child < right_child && parent < right_child) {
                swap(arr_key, 2*arr_key + 2);
                sifting(2*arr_key + 2);
            }
            else if (parent < left_child){
                swap(arr_key, 2*arr_key + 1);
                sifting(2*arr_key + 1);
            }
        }
    }

    function sort_arr(){
        $("#sort").prop("disabled", true);
        $("#create").prop("disabled", true);
        for (let i = parseInt(arr_size/2) - 1; i >= 0; i--) {
            sifting(i);
        }
        arr_size--;
        for (arr_size; arr_size > 0; arr_size--){
            swap(0, arr_size);
            sifting(0);
        }
        alert("success");
        $("#create").prop("disabled", false);
    }
</script>

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Сортировка массива</title>
</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


    <div class="container">
        <br><h2>Сортировка</h2><br>
        <button type="button" id="generation" class="btn btn-outline-dark" onclick="rand()">Генерация массива</button><br><br>
        <button type="button" id="sort" class="btn btn-outline-dark" onclick="sort_arr()">Sort</button>
    </div>
    <div id = "result"></div>

    </body>

</html>
<!--
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <title>Сортировка</title>
    </head>
    <body>
        <div class="container">
            <div class="col btn-group-vertical" style="margin-left:535px; margin-top:200px">
                <button type="button" id="create" class="btn btn-success" onclick="set_random_array()">Создать случайный массив</button>
                <button type="button" id="sort" class="btn btn-success" onclick="sort_array()">Отсортировать массив</button>
            </div>
        </div>
        <div id = "result"></div>
    </body>
    <script>
        $("#sort").prop("disabled", true);
    </script>
</html>
-->
