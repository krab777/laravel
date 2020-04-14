<template>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/" class="nav-item nav-link">Home1111</router-link>
                    <router-link to="/add" class="nav-item nav-link">ADDDD</router-link>

                </div>
            </div>
        </nav>
        <br/>
        <div>THis is starter page</div>
        <router-view></router-view>
    </div>
</template>

<script>
    export default {}
</script>