<template>
    <input placeholder="Enter your coupon code" @blur="onCouponApplied">
</template>

<script>
    export default {
        name: "coupon",
        methods: {
            onCouponApplied() {
                this.$emit('applied');
            }
        },
    }
</script>

<style scoped>

</style>