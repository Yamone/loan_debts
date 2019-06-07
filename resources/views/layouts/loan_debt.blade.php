@extends('layouts.app')

@section('content')
<div class="container">
    <h3 align="center">Loan Debt System</h3>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                      <form class="justify">
                          <div class="form-group row">
                              <label class="col-md-4">Loan Amount</label>
                              <div class="col-md-8">
                                <input type="number" class="form-control" id="loan_amt" placeholder="Enter Loan Amount">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-md-4 col-form-label">Interest Rate (%)</label>
                              <div class="col-md-8">
                                <input type="number" class="form-control" id="interest_rate" placeholder="Interest Rate (%)">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-md-4 col-form-label">Repayment Amount</label>
                              <div class="col-md-8">
                                <input type="number" class="form-control" id="repay" placeholder="Repayment Amount">
                              </div>
                          </div>
                          <div class="col text-center">
                             <button type="button" name="button" class="btn btn-primary" id="btn_calculate">Calculate</button>
                          </div>
                      </form><br><br>
                      <div class="row">
                          <div id="result">

                          </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).on('click', '#btn_calculate', function () {
    var loan_amt=document.getElementById('loan_amt').value;
    var inter_rate=document.getElementById('interest_rate').value;
    var repay=document.getElementById('repay').value;

   if(loan_amt=='' || loan_amt==null || inter_rate=='' || inter_rate==null || repay=='' || repay==null){
       alert('Please, Fill all fields completely!');
       return false;
   }

    var total_loan=0;
    var i=1;

    function suffix(i) {
    var j = i % 10,
        k = i % 100;
    if (j == 1 && k != 11) {
        return i + "st";
    }
    if (j == 2 && k != 12) {
        return i + "nd";
    }
    if (j == 3 && k != 13) {
        return i + "rd";
    }
    return i + "th";
}
    var result='';
    var remaining_amt = loan_amt;

    while(parseFloat(remaining_amt) > (parseFloat(repay)))
    {
          var monthly_loan=( parseFloat(remaining_amt) * (parseFloat(inter_rate)/100 ) ) / 12;
              remaining_amt = parseFloat(remaining_amt) + parseFloat(monthly_loan) - parseFloat(repay) ;
              result=result+suffix(i) + " month: Repayment amount "+repay+" Ks remaining "+Math.floor(remaining_amt)+" Ks <br>";

          i+=1;
    }

    total_loan  =parseFloat(remaining_amt) + ( parseFloat(remaining_amt) * (parseFloat(inter_rate)/100 ) ) / 12;
    var total_repay = parseFloat(loan_amt) + parseFloat(total_loan)
    result= result+suffix(i) +" month: Repayment amount "+Math.floor(total_loan)+" Ks to pay off. Total repayment:"+Math.floor(parseFloat(total_repay))+" Ks";
    document.getElementById('result').innerHTML= result;
});

</script>


@endsection
