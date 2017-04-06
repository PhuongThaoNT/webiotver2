      
      $(function () {
          $('.pbm').hide();
          $('.showPtn').hide();
          $('.ctdt').hide();
          $('.gv').hide();
          $('.khoahoc').hide();
          //hien thi menu bo mon
          $('.clickbm').click(function(){
            $('.pbm').show();
            $('.bm').show();
            $('.gtcnpm').hide();
            $('.gt').hide();
            $('.showPtn').hide();
            $('.ctdt').hide();
            $('.gv').hide();
            $('.khoahoc').hide();
          });
          //hien thi danh sach phong thi nghiem
          $('.clickptn').click(function(){
            $('.showPtn').show();
            $('.gt').hide();
            $('.pbm').hide();
            $('.ctdt').hide();
            $('.gv').hide();
            $('.khoahoc').hide();
          });
          //hien thi chuong trinh dao tao
          $('.clickctdt').click(function(){ 
            $('.ctdt').show();
            $('.menuctdt').show();
            $('.gtcntt').hide();
            $('.gt').hide();
            $('.pbm').hide();
            $('.showPtn').hide();
            $('.gv').hide();
            $('.khoahoc').hide();
          });
          //hien thi thong tin giang vien 
          $('.clickgv').click(function(){
            $('.gv').show();
            $('.thuocbm').show();
            $('.listgv').hide();
            $('.ct1').hide();
            $('.gt').hide();
            $('.pbm').hide();
            $('.showPtn').hide();
            $('.ctdt').hide();
            $('.khoahoc').hide();
          });
          $(function(){
           $('.clickkh').click(function(){
              $('.khoahoc').show();
              $('.gv').hide();
              $('.ctdt').hide();
              $('.showPtn').hide();
              $('.gt').hide();
              $('.bm').hide();
              $('.gtcnpm').hide();
            });
          });  
        });
      //gioi thieu bo mon cong nghe phan mem khi chon bo mon
      $(function(){
        $('.gtcnpm').hide();
        $('.clickcnpm').click(function(){
          $('.gtcnpm').show();
        })
      });
      //gioi thieu khoa cong nghe thong tin. Hien thi mac dinh khi vao
      $(function(){
        $('.gtcntt').hide();
        $('.clickcntt').click(function(){
          $('.gtcntt').show();
        })
      })
      $(function(){
        $('.listgv').hide();
        $('.ct1').hide();
        //hien thi list giao vien thuoc bo mon cong nghe phan mem
        $('.gvcnpm').click(function(){
          $('.listgv').show();
          $('.ct1').hide();
          //hien thi chi tiet thong tin giang vien khi click chi tiet
          $('.clickct1').click(function(){
            $('.ct1').show();
            $('.listgv').hide();
          });
        });
      });
    
      //load file gioi thieu cong nghe phan mem o dang text. dang test cai nay
      $('.clickcnpm').click(function() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
           document.getElementById("textcnpm").innerHTML = this.responseText;
          }
        };
        xhttp.open("GET", "CNPM.txt", true);
        xhttp.send();
      }); 