<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('faqs', function (Blueprint $table) {
        $table->increments('id');
        $table->text('question');
        $table->text('answer');
        $table->timestamps();
      });

      $data1 = array(
            "question"=>"Why are your prices so much better than most dealers?",
            "answer"=>"We offer better prices simply because of our low overheads. Industry Resources tell us that the Average new car dealer spends $50k in advertising, $50k in rent, $30k in paying salespeople commission, 30k to a sales manager, and the list goes on and on. We on the other hand spend virtually no money on advertising, we rely mostly on our past customers to spread the word. We do not have commissioned sales staff or behind the scenes sales Managers."
        );

        $data2 = array(
            "question"=>"What is the condition of your vehicles?",
            "answer"=>"Most of our inventory is 1-Owner Carfax Certified cars and truck. Most of our vehicles are Factory Certification Eligible. We do not deal in Salvage title, flood vehicles or vehicles that have been totaled.."
        );

        $data3 = array(
            "question"=>"Where do you Source your Reconditioned cars? ",
            "answer"=>"Most of our vehicles are factory lease returns, factory program cars that are purchased directly from the leasing companies such as Lexus Financial, BMW Financial, Audi Financial, Mercedes Benz Credit, Honda and Acura Financial. Some vehicle are trade in to stores that carry mostly highline vehicles, such as an exotic dealer if they take a Toyota in trade would often wholesale to other dealers that specialize in that type of car. We also purchase 30 day and 60 day old vehicles from Toyota, BMW, Honda stores to such a name a few. All vehicles have been put thru rigorous safety inspections."
        );

        $data4 = array(
            "question"=>"What kind of inspection do you perform on your Reconditioned cars? ",
            "answer"=>"All of our vehicles go thru an extensive mechanical, safety inspection, We take pride in delivering cars that meet and exceed industry standards for reconditioning. Our used cars inspection are made available to our customers. So if you are considering a used car please ask for your complimentary safety inspection report."
        );

        $data5 = array(
            "question"=>"Can I have an Independent inspection performed? ",
            "answer"=>"Yes we welcome any independent inspection to be performed on all of our vehicles."
        );

        $data6 = array(
            "question"=>"Do you offer financing?",
            "answer"=>"Yes, we do offer financing."
        );

        $data7 = array(
            "question"=>"Do your vehicles carry a Factory Warranty?",
            "answer"=>"If the vehicle purchased is within the original Manufactures warranty we will transfer the coverage to you as the new owner."
        );

        $data8 = array(
            "question"=>"When is the best time to buy a new car?",
            "answer"=>"The best times to buy a new car are at the end of the month, the end of the quarter and the end of the year. Dealers and their salespeople are rewarded for meeting sales goals during those time periods, so the sale of a few more vehicles could result in their getting a huge bonus that is based on all the vehicles they sold before the end of that time period. In these situations, dealers and salespeople are so motivated to close a sale that they will let some new cars go with little-or-no profit in the deal."
        );

        $data9 = array(
            "question"=>"Is leasing cheaper than buying?",
            "answer"=>"In most cases, leasing is NOT cheaper than buying. If you typically keep new cars longer than three years, then buying is going to be cheaper in the long run. The most expensive period of ownership is the first three years because that's when new cars depreciate the most. So the longer you keep a new car past the first three years, the lower your overall cost will be. Since dealers often use leasing tricks to overcharge unsuspecting consumers, leasing can end up being a lot more expensive than a conventional purchase."
        );

        $data10 = array(
            "question"=>"What is a good lease deal?",
            "answer"=>"A good lease deal is no money down, lease term 36 months or less, and a $200 monthly payment - or as close to this as you can get. (Remember, a lease is just a long-term rental with no ownership or equity.) Beware of cap reductions, as they are really just monthly payments paid in advance to make a bad deal look better. For example, on a 30-month lease, a $230 payment with a $2100 cap reduction is NOT cheaper than a $300 payment with no cap reduction. The $2100 cap reduction is just hiding the extra $70 per month rental cost. You can lease a Mercedes or a Cadillac for $400 to $500 per month, so don't get stuck paying that for a cheaper car. (Throw that in the dealer's face as a negotiating tactic.)"
        );

        $data11 = array(
            "question"=>"Are all car prices and leases negotiable?",
            "answer"=>"When it comes to car sales, everything is negotiable: prices, interest rates and terms on loans and leases, equipment and options. If you run into a dealer who claims that prices (or anything else) are not negotiable, just leave. Then visit all the other dealers in your area who will allow you to negotiate on everything. Be sure to negotiate a lower selling price (or cap cost) on a lease, as this is used to calculate "
        );

        $data12 = array(
            "question"=>"Can I get out of a lease early?",
            "answer"=>"Yes, you can get out of a lease early, but it's going to cost you. You will have to pay an early termination penalty plus the difference between the current market value of the car and the amount of depreciation that you have paid on the lease. So if the residual was inflated (it probably was), you could be upside-down by $2,000 or more. For example, if the penalty is $200 and your lease is upside-down by $2,300 you will have to pay $2,500 to get out of the lease early."
        );

        $data13 = array(
            "question"=>"What is a reasonable amount to spend per month for a car payment?",
            "answer"=>"A good rule to follow is to limit your car payment to 20% of the funds that you have available every month after paying for all your living expenses including rent/mortgage payment, utilities, credit card payments, insurance, food, etc. And your down payment should be at least 10% of the total purchase amount."
        );

        $data14 = array(
            "question"=>"Is it a good idea to buy an extended warranty for my new car?",
            "answer"=>"While some people have benefited from having an extended warranty (or service contract), for most people they do not make financial sense. In most cases, consumers will spend more money paying for the extended warranty than they will get back in benefits (paid claims), especially if they use their car loan to finance the cost of the warranty. This is why most consumer advocates and financial experts advise against buying an extended warranty or service contract. Another pitfall of buying them is that many dealers dramatically inflate the warranty prices to increase their profits, making them horrible deals. And some dealers have sold policies that were all but worthless because they were not backed by a major insurance company, so repair claims were not paid."
        );

        DB::table('faqs')->insert(array($data1,$data2,$data3,$data4,$data5,$data6,$data7,$data8,$data9,$data10,$data11,$data12,$data13,$data14));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faqs');
    }
}
