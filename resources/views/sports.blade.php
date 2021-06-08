@extends('layouts.app')



@section('main')
<main id="root">
  <ul>
    <li v-for="sport in sports" :key="sport.id">
    </li>
  </ul>

</main>
@endsection


@section('head')
@endsection

@section('foot-script')
<script type="text/javascript">
  let app = new Veu({
    el: '#root',
    data: {
      sports: []
    },
    created() {
      axios.get().then((response) => {
        this.sports = response.data;
      })
    }
  });
</script>
@endsection
