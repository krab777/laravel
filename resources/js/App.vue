<template>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/blog/public/dashboard/api" class="nav-item nav-link">Home</router-link>
                    <router-link to="/blog/public/dashboard/api/add" class="nav-item nav-link">Add Book</router-link>
                </div>
            </div>
        </nav>
        <br/>
        <router-view></router-view>
    </div>
</template>

<script>
    export default {}
</script>