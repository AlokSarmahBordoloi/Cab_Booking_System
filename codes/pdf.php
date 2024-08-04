<?php
include '../database.php';
?>
<?php
  if (!empty($_POST['pay_bill']));
{
  $ride_id = $_GET['ride_id'];
  $customerid = $_GET['customer_id'];
  $amount = $_GET['amount'];
  $cname = $data["name"];
  $card_number = $data["card_number"];
  $expdate = $data["exp_date"];
  $cvv = $data["cvv"];
  
          
          require("fpdf/fpdf.php");
          $pdf = new FPDF();
          $pdf->Addpage();
          $pdf = SetFont("Arial","",16);
          $pdf->Cell(0,10,"Billing_Details",1,1,'C');
          $pdf->output('I','Bill.pdf');

        
        
        }
       
//<a href=<?php echo "pdf.php?ride_id=".$ride_id."&customer_id=".$customerid."&amount=".$amount."&name=".$name."&card_number=".$card_number."&exp_date".$exp_date."&cvv".$cvv ?>><button type="submit" name="pay_bill" class="form__btn">Generate Bill/pdf</button></a>
      
      <!-- <a href=<?php echo "pdf.php?ride_id=".$ride_id."&customer_id=".$customerid."&amount=".$amount ?>><button type="submit" name="" class="form__btn">Download_Ricept</button></a> -->
       


            
            
        
        
    

    ?>
    
    