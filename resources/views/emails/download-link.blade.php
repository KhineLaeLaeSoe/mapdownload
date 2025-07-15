<p>မင်္ဂလာပါ {{ $order->customer_name }}၊</p>

<p>သင့် payment ကိုအတည်ပြုပြီးပါပြီ။ အောက်ပါလင့်ခ်မှ ဖိုင်ကို download ပြုလုပ်နိုင်ပါသည်။</p>

<p>
    <a href="{{ url('download/map/' . $order->id) }}">
        Click here to download your map
    </a>
</p>

<p>ကျေးဇူးတင်ပါတယ်။<br>DPS Map Team</p>
