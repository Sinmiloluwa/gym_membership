<template>
    <h1 class="text-bold">Users</h1>

    <Nav />
    <div style="margin-top : 480px">
        <h3>The time is {{ time }}</h3>

        <Link href="/users" class="text-blue-500" preserve-scroll>Refresh</Link>
    </div>
</template>

<script>
import Nav from '../Shared/Nav';
import {Link} from '@inertiajs/inertia-vue3';
export default {
   components : {Nav, Link},
   props : {
       time : String
   }
};
</script>