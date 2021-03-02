
    <form method="post" action="{{ route('admin-access-save') }}">


        <select class="form-control mb-2" name="role">
        <option value="1">Обычный пользователь</option>
            <option value="5">Модератор</option>
            <option value="10">Администратор</option>
        </select>

        <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
        <input type="submit" value="Выдать права">
    </form>
