$(document).ready(function () {

    ajukan_disable()

    const owl = $('.owl-carousel');
    const owl1 = $('#owl-carousel1');
    const owl2 = $('#owl-carousel2');
    owl.owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        autoplay: false,
        autoplayTimeout: 5000,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2,
            },
            600: {
                items: 4,
            },
            1000: {
                items: 4,
                loop: false,
            }
        }
    });

    $(".next").click(function(){
        owl1.trigger('next.owl');

      })
      $(".prev").click(function(){
        owl1.trigger('prev.owl');
    })
    $(".next2").click(function(){
        owl2.trigger('next.owl');

      })
      $(".prev2").click(function(){
        owl2.trigger('prev.owl');
    })



    $('#tanggal-sewa').flatpickr({
        enableTime: false,
        dateFormat: "d/m/Y",
        minDate:"today"
    });

    

    

    function mulaiTgl($var){
        $('#detail-pesanan').removeClass('d-none')
        $('#mulai-tanggal').html($var)
    }

    function akhirTgl($var){
        $('#akhir-tanggal').html($var)
    }

    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    function intervalBayar($a, $b){

        $hargaBulan = $('#harga-bulan').val()
        $b[1] = parseInt($b[1])
        $b[2] = parseInt($b[2])

        $newB = $b

        if($a == 1){
            $newB[1] = $b[1] + 1
            if($newB[1] > 12){
                $newB[1]  = $newB[1] - 12
                $newB[2] = $b[2] + 1     
            }
        }
        else if($a == 3){
            $newB[1] = $b[1] + 3
            if($newB[1] > 12){
                $newB[1]  = $newB[1] - 12
                $newB[2] = $b[2] + 1     
            }
        }
        else if($a == 6){
            $newB[1] = $b[1] + 6
            if($newB[1] > 12){
                $newB[1]  = $newB[1] - 12
                $newB[2] = $b[2] + 1     
            }
        }
        else if($a == 12){
            $newB[1] = $b[1] + 1
            $newB[2] = $b[2] + 1
        }

        // $zero = '0'

        if($b[1] < 10){
            $b[1] = ['0', $b[1]].join('')
        }

        // alert($b[1])

        $b = $newB.join('/')
        $hargaBulan = $hargaBulan*$a;

        $('#akhir-tanggal').html($b)
        $('#bayar').html(numberWithCommas($hargaBulan))
        
        if($a == 12){
            $a = 1
            $format = 'Tahun'
        }
        else{
            $format = 'Bulan'
        }
        $('#interval').html([$a, $format].join(' '))

        $diskon = $('#diskon-kost').val()
        $('#diskon').html(numberWithCommas($diskon))
        $total = $hargaBulan - $diskon
        $('#total-bayar').html(numberWithCommas($total))
        $('#total').val(numberWithCommas($total))
        
    }

    $intervalSewa = 1
    // $mulaiSewa = $('#interval-sewa').val.split('/');


    $('#interval-sewa').change(function(){
        $mulaiSewa = $('#tanggal-sewa').val()
        // mulaiTgl($mulaiSewa)
        $mulaiSewa = $mulaiSewa.split('/')

        $intervalSewa = $(this).val()
        
        intervalBayar($intervalSewa, $mulaiSewa);
        ajukan_disable()

    })

    $('#tanggal-sewa').change(function(){
        $mulaiSewa = $(this).val()
        mulaiTgl($mulaiSewa)
        $mulaiSewa = $mulaiSewa.split('/');
        
        intervalBayar($intervalSewa, $mulaiSewa);
        ajukan_disable()
        
    })

    function ajukan_disable(){
        if($('#total').val() == 0){
            $('#ajukan').prop("disabled", true);
        }
    
        else{
            $('#ajukan').prop("disabled", false);
        }
    }

    
    $('#pembayaran').submit(function(e){
        e.preventDefault()
        alert('hehe bouy')

    })

    $('.tabs__item').click(function(){
        // $('.tabs__content').fade()
        // $('.tabs_active').fade()
        
    })

    
    


   
})
