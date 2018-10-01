<template>
    <default-field :field="field">
        <template slot="field">
            <p class="text-80 h-9 pt-2 ml-3">{{ field.value }}</p>
        </template>
    </default-field>
</template>

<script>
export default {
  props: {
    field: { type: Object, required: true }
  }
};
</script>
