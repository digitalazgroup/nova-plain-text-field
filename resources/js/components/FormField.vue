<template>
    <default-field :field="field">
        <template slot="field">
            <span class="inline-block pt-2 leading-tight">{{ field.value }}</span>
        </template>
    </default-field>
</template>

<script>
import { FormField } from 'laravel-nova';

export default {
    mixins: [FormField],

    props: ['field'],
};
</script>
