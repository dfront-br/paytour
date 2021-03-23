@component('mail::message')
# Currículo cadastrado

Um novo talento foi cadastrado em sua base de dados.
Segue abaixo os dados que foram submetidos pelo usuário:

# Dados pessoais:

**Nome:**

{{ $job->name }}

**Email:**

{{ $job->email }}

**Telefone:**

{{ $job->phone }}

**Cargo desejado:**

{{ $job->occupation }}

**Escolaridade:**

{{ $job->educate->title }}

@if ($job->note)

**Observação:**

{{ $job->note }}

@endif


## Outras informações:
**ip:**

{{ $job->ip_address }}

**data de envio:**

{{ date('d \d\e F \d\e Y', strtotime($job->send_at))  }}

@component('mail::button', ['url' => $job->file ])
ver curriculum
@endcomponent
@endcomponent
