// $(document).ready(function() {
//     $(document).on('click','.btnaddform', function(){
//         var html = '<tr><td><input class="form-control" id="perihal_test" name="perihal_test[]" type="text" placeholder="Perihal Test" autofocus></td><td><input class="form-control" id="point_nilai" name="point_nilai[]" type="text" placeholder="Point Nilai" autofocus></td><td><button type="button" class="btn btn-danger btnRemove"><i class="fa fa-trash"></i></button></td></tr>';
//         $('#formtambah').append(html);
//     });
// });

function tambahInput(){
    var idf = document.getElementById("idf").value;
    var html = '<tr id="srow'+idf+'"><td><input class="form-control" id="perihal_test[]" name="perihal_test[]" type="text" placeholder="Perihal Test" autofocus></td><td><input class="form-control" id="point_nilai[]" name="point_nilai[]" type="text" placeholder="Point Nilai" autofocus></td><td><button type="button" class="btn btn-danger btnRemove" onclick="hapusInput(srow'+idf+'); return false;"><i class="fa fa-trash"></i></button></td></tr>';
    $('#formtambah').append(html);
    idf = (idf-1)+2;
    document.getElementById("idf").value = idf;
}

function hapusInput(idf){
    $(idf).remove();
}

function tambahInputSoal(){
    var idf = document.getElementById("idf").value;
    var html = '<tr id="srow'+idf+'"><td><textarea type="text" placeholder="Jawaban" class="form-control" id="jawaban[]" name="jawaban[]"></textarea></td><td><button type="button" class="btn btn-danger btnRemoveSoal" onclick="hapusInputSoal(srow'+idf+'); return false;"><i class="fa fa-trash"></i></button></td></tr>';
    $('#formtambahsoal').append(html);
    idf = (idf-1)+2;
    document.getElementById("idf").value = idf;
}

function hapusInputSoal(idf){
    $(idf).remove();
}

function tambahInputSoal2(){
    var idf2 = document.getElementById("idf2").value;
    var html = '<tr id="srow'+idf2+'"><td><textarea type="text" placeholder="Jawaban Benar" class="form-control" id="jawaban_benar[]" name="jawaban_benar[]"></textarea></td><td><input type="text" placeholder="Point Soal"  class="form-control" id="point_soal[]" name="point_soal[]"></td><td><button type="button" class="btn btn-danger btnRemoveSoal2" onclick="hapusInputSoal2(srow'+idf2+'); return false;"><i class="fa fa-trash"></i></button></td></tr>';
    $('#formtambahsoal2').append(html);
    idf2 = (idf2-1)+2;
    document.getElementById("idf2").value = idf2;
}

function hapusInputSoal2(idf2){
    $(idf2).remove();
}