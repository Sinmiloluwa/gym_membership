<template>
      <nav
        class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6"
      >
        <div
          class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto"
        >
          <button
            class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
            type="button"
            onclick="toggleNavbar('example-collapse-sidebar')"
          >
            <i class="fas fa-bars"></i></button
          >
          <a
            class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
            href="javascript:void(0)"
          >
            Tailwind Starter Kit
          </a>
          <ul class="md:hidden items-center flex flex-wrap list-none">
            <li class="inline-block relative">
              <a
                class="text-blueGray-500 block py-1 px-3"
                href="#pablo"
                onclick="openDropdown(event,'notification-dropdown')"
                ><i class="fas fa-bell"></i
              ></a>
              <div
                class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
                style="min-width: 12rem;"
                id="notification-dropdown"
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
            </li>
            <li class="inline-block relative">
              <a
                class="text-blueGray-500 block"
                href="#pablo"
                onclick="openDropdown(event,'user-responsive-dropdown')"
                ><div class="items-center flex">
                  <span
                    class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"
                    ><img
                      alt="..."
                      class="w-full rounded-full align-middle border-none shadow-lg"
                      src=""
                  /></span></div
              ></a>
              <div
                class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
                style="min-width: 12rem;"
                id="user-responsive-dropdown"
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
            </li>
          </ul>
          <div
            class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
            id="example-collapse-sidebar"
          >
            <div
              class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200"
            >
              <div class="flex flex-wrap">
                <div class="w-6/12">
                  <a
                    class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
                    href="javascript:void(0)"
                  >
                    Tailwind Starter Kit
                  </a>
                </div>
                <div class="w-6/12 flex justify-end">
                  <button
                    type="button"
                    class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                    onclick="toggleNavbar('example-collapse-sidebar')"
                  >
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </div>
            <form class="mt-6 mb-4 md:hidden">
              <div class="mb-3 pt-0">
                <input
                  type="text"
                  placeholder="Search"
                  class="border-0 px-3 py-2 h-12 border border-solid  border-blueGray-500 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal"
                />
              </div>
            </form>
            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
              <li class="items-center">
                <a
                  class="text-pink-500 hover:text-pink-600 text-xs uppercase py-3 font-bold block"
                  href="#/dashboard"
                  ><i class="fas fa-tv opacity-75 mr-2 text-sm"></i>
                  Dashboard</a
                >
              </li>
              <NavLink href="/subscription"
                  class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                
                  ><i class="fas fa-newspaper text-blueGray-400 mr-2 text-sm"></i>
                  Subscription
              </NavLink>
              <NavLink href="/subscription"
                  class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                  ><i class="fas fa-user-circle text-blueGray-400 mr-2 text-sm"></i>
                  Profile Page
              </NavLink>
              <li class="items-center">
                <a
                  class="text-blueGray-300 text-xs uppercase py-3 font-bold block"
                  href="#pablo"
                  ><i class="fas fa-tools text-blueGray-300 mr-2 text-sm"></i>
                  Settings (soon)</a
                >
              </li>
            </ul>
            <hr class="my-4 md:min-w-full" />

            <ul
              class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4"
            >
              <li class="inline-flex">
                <a
                  class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold"
                  href="#/documentation/styles"
                  ><i
                    class="fas fa-paint-brush mr-2 text-blueGray-400 text-base"
                  ></i>
                  Styles</a
                >
              </li>
              <li class="inline-flex">
                <a
                  class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold"
                  href="#/documentation/alerts"
                  ><i class="fab fa-css3-alt mr-2 text-blueGray-400 text-base"></i>
                  CSS Components</a
                >
              </li>
              <li class="inline-flex">
                <a
                  class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold"
                  href="#/documentation/vue/alerts"
                  ><i class="fab fa-vuejs mr-2 text-blueGray-400 text-base"></i>
                  VueJS</a
                >
              </li>
              <li class="inline-flex">
                <a
                  class="text-blueGray-700 hover:text-blueGray-500  text-sm block mb-4 no-underline font-semibold"
                  href="#/documentation/react/alerts"
                  ><i class="fab fa-react mr-2 text-blueGray-400 text-base"></i>
                  React</a
                >
              </li>
              <li class="inline-flex">
                <a
                  class="text-blueGray-700 hover:text-blueGray-500  text-sm block mb-4 no-underline font-semibold"
                  href="#/documentation/angular/alerts"
                  ><i class="fab fa-angular mr-2 text-blueGray-400 text-base"></i>
                  Angular</a
                >
              </li>
              <li class="inline-flex">
                <a
                  class="text-blueGray-700 hover:text-blueGray-500  text-sm block mb-4 no-underline font-semibold"
                  href="#/documentation/javascript/alerts"
                  ><i class="fab fa-js-square mr-2 text-blueGray-400 text-base"></i>
                  Javascript</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
</template>

<script>
import NavLink from '../../Shared/NavLink';

export default{
  components : {NavLink}
}

</script>
