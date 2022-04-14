<select class="form-control" id="business_established" name="established_date">
    @for ($i = 1900; $i < 2022; $i++)
        <option value=" {{ $i }}"> {{ $i }}</option>
    @endfor
</select>
