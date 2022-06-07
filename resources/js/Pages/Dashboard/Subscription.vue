<template>
    <Nav/>
    <div class="relative md:ml-64 bg-blueGray-50">
        <nav
          class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4"
        >
          <div
            class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4"
          >
            <a
              class="text-white text-sm uppercase hidden lg:inline-block font-semibold"
              href="./index.html"
              >Dashboard</a
            >
            <form
              class="md:flex hidden flex-row flex-wrap items-center lg:ml-auto mr-3"
            >
              <div class="relative flex w-full flex-wrap items-stretch">
                <span
                  class="z-10 h-full leading-snug font-normal absolute text-center text-blueGray-300 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3"
                  ><i class="fas fa-search"></i
                ></span>
                <input
                  type="text"
                  placeholder="Search here..."
                  class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:ring w-full pl-10"
                />
              </div>
            </form>
            <ul
              class="flex-col md:flex-row list-none items-center hidden md:flex"
            >
              <a class="text-blueGray-500 block" href="#pablo" onclick="openDropdown(event,'user-dropdown')">
                <div class="items-center flex">
                  <span
                    class="w-12 h-12 ml-6 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"
                    ></span>
                </div>
              </a>
              <div
                class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
                style="min-width: 12rem;"
                id="user-dropdown"
              >
                <a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                  >Action</a
                ><a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                  >Another action</a
                ><a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                  >Something else here</a
                >
                <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                <a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                  >Seprated link</a
                >
              </div>
            </ul>
          </div>
        </nav>
        <!-- Header -->
        <div class="relative bg-pink-600 md:pt-32 pb-32 pt-12">
          <div class="px-4 md:px-10 mx-auto w-full">
            <div>
              <!-- Card stats -->
              <div class="flex flex-wrap">
                <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                  <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                    <div class="flex-auto p-4">
                      <div class="flex flex-wrap">
                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                          <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                            Date
                          </h5>
                          <p class="font-semibold text-xl text-blueGray-700 demo" id="demo">
                            
                          </p>
                        </div>
                        <div class="relative w-auto pl-4 flex-initial">
                          <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500">
                            <i class="far fa-chart-bar"></i>
                          </div>
                        </div>
                      </div>
                        <!-- <p class="text-sm text-blueGray-400 mt-4">
                        <span class="text-emerald-500 mr-2">
                          <i class="fas fa-arrow-up"></i> 3.48%
                        </span>
                        <span class="whitespace-nowrap">
                          Since last month
                        </span>
                      </p> -->
                    </div>
                  </div>
                </div>
                <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                  <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                    <div class="flex-auto p-4">
                      <div class="flex flex-wrap">
                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                          <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                            Instructor
                          </h5>
                          <span class="font-semibold text-sm text-blueGray-700">
                            James Milner
                          </span>
                        </div>
                        <div class="relative w-auto pl-4 flex-initial">
                          <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-orange-500">
                            <i class="fas fa-chart-pie"></i>
                          </div>
                        </div>
                      </div>
                      <!-- <p class="text-sm text-blueGray-400 mt-4">
                        <span class="text-red-500 mr-2">
                          <i class="fas fa-arrow-down"></i> 3.48%
                        </span>
                        <span class="whitespace-nowrap">
                          Since last week
                        </span>
                      </p> -->
                    </div>
                  </div>
                </div>
                <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                  <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                    <div class="flex-auto p-4">
                      <div class="flex flex-wrap">
                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                          <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                            Hours Spent
                          </h5>
                          <span class="font-semibold text-xl text-blueGray-700">
                            140
                          </span>
                        </div>
                        <div class="relative w-auto pl-4 flex-initial">
                          <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-pink-500">
                            <i class="fas fa-users"></i>
                          </div>
                        </div>
                      </div>
                      <!-- <p class="text-sm text-blueGray-400 mt-4">
                        <span class="text-orange-500 mr-2">
                          <i class="fas fa-arrow-down"></i> 1.10%
                        </span>
                        <span class="whitespace-nowrap">
                          Since yesterday
                        </span>
                      </p> -->
                    </div>
                  </div>
                </div>
                <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                  <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                    <div class="flex-auto p-4">
                      <div class="flex flex-wrap">
                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                          <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                            Performance
                          </h5>
                          <span class="font-semibold text-xl text-blueGray-700">
                            49,65%
                          </span>
                        </div>
                        <div class="relative w-auto pl-4 flex-initial">
                          <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-lightBlue-500">
                            <i class="fas fa-percent"></i>
                          </div>
                        </div>
                      </div>
                      <p class="text-sm text-blueGray-400 mt-4">
                        <span class="text-emerald-500 mr-2">
                          <i class="fas fa-arrow-up"></i> 12%
                        </span>
                        <span class="whitespace-nowrap">
                          Since last month
                        </span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center mt-6">
            <p>Subscribe to get access to all gym facilities</p>
        </div>
        <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
    <!--Card 1-->
    <div class="rounded overflow-hidden shadow-lg bg-pink-600">
      <!-- <img class="w-full" src="/mountain.jpg" alt="Mountain"> -->
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-3 text-center">Mountain</div>
        <div class="font-bold text-xl mb-3 text-center">1 Month</div>
        <p class="text-gray-900 text-base text-xl text-center font-bold">
            <span class="font-bold">₦</span> 5000
        </p>
      </div>
      <div class="px-6 pt-4 pb-2 text-center">
        <a href="#"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
  Subscribe
</button></a>
      </div>
    </div>
    <!--Card 2-->
    <div class="rounded overflow-hidden shadow-lg bg-pink-600">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2 text-center">River</div>
        <div class="font-bold text-xl mb-3 text-center">2 Months</div>
        <p class="text-gray-900 text-base text-xl text-center font-bold">
            <span class="font-bold">₦</span> 7000
        </p>
      </div>
      <div class="px-6 pt-4 pb-2 text-center">
          <a href="#"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
  Subscribe
</button></a>
       </div>
    </div>

    <!--Card 3-->
    <div class="rounded overflow-hidden shadow-lg bg-pink-600">
      <!-- <img class="w-full" src="/forest.jpg" alt="Forest"> -->
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2 text-center">Forest</div>
        <div class="font-bold text-xl mb-3 text-center">3 Months</div>
         <p class="text-gray-900 text-base text-xl text-center font-bold">
            <span class="font-bold" >₦</span> <span id="price">12000</span>
        </p>
      </div>
      <div class="px-6 pt-4 pb-2 text-center">
           <a href="#" v-on:click="payWithPaystack"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit" id="payment" @submit.prevent="submit">
  Subscribe
</button></a>
        </div>
    </div>
  </div>
</div>

</template>

<script>
import Nav from './Nav';
import NavLink from '../../Shared/NavLink';
export default {
   components : {Nav, NavLink},
}
</script>

<script setup>
import { onMounted } from 'vue';
import {reactive} from 'vue';
import {Inertia} from '@inertiajs/inertia';
defineProps({
    user : String
});

onMounted(() => {
  const d = new Date();
  const month = d.getMonth() + 1;
  const span = document.getElementById("demo").textContent = d.getFullYear() + '-' + month + '-' + d.getDate();

  let Script = document.createElement("script");
    Script.setAttribute("src", "https://js.paystack.co/v1/inline.js");
    document.head.appendChild(Script);

    const paymentForm = document.getElementById('payment');
paymentForm.addEventListener("click", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();
  let handler = PaystackPop.setup({
    key: 'pk_test_dabf38487d6752067458bbd68238b4b7c964d9bf', // Replace with your public key
    email: "emmasimons141@gmail.com",
    amount: document.getElementById("price").innerText * 100,
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      let form = reactive({
      email : 'emmasimons141@gmail.com',
      amount : document.getElementById("price").innerText * 100,
      reference : response.reference
   });

let submit = () => {
  Inertia.post('/pay', form);
}
    }
  });
  handler.openIframe();
  console.log(document.getElementById("price").innerText.split("₦"));
}

})
</script>

