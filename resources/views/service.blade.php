@extends('layouts.main')

@section('content')
<div style="display: flex">
    <div class="service_list">
        <ul style="text-decoration: none">
            @foreach($posts as $post)
            <li><a href="{{"$post->link"}}">{{"$post->title"}}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="service_info">
        <div class="si_page">
            <p class="si_title">Мы поможем вам</p>
            <div class="si_text">
                <div class="si_t">
                    <a><i class="fa fa-lightbulb-o" aria-hidden="true"></i></a>
                    <div style="display: block">
                        <p class="si_tm">Управление строительством</p>
                        <p>Деятельность, направленная на достижение целей и задач инвестиционно-строительного проекта, начиная с подготовки инвестиционного плана и заканчивая возведением  и сдачей объекта в эксплуатацию..
                        </p>
                    </div>
                </div>
                <div class="si_t">
                    <a><i class="fa fa-cog" aria-hidden="true"></i></a>
                    <div style="display: block">
                        <p class="si_tm">Строительный контроль</p>
                        <p>Комплекс экспертно-проверочных мероприятий, осуществляемых с целью обеспечения точного соблюдения определяемых проектом сроков, стоимости, объемов и качества производимых строительных работ.
                        </p>
                    </div>
                </div>
            </div>
            <div class="si_text">
                <div class="si_t">
                    <a><i class="fa fa-map-marker" aria-hidden="true"></i></a>
                    <div style="display: block">
                        <p class="si_tm">Управление стоимостью строительства</p>
                        <p>Вид контроля процесса строительства, осуществляемый с целью обеспечения соответствия строительства объекта решениям и показателям, предусмотренным в утвержденной проектно-сметной документации.
                        </p>
                    </div>
                </div>
                <div class="si_t">
                    <a><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <div style="display: block">
                        <p class="si_tm">Финансово-технический аудит и сопровождение</p>
                        <p>Комплекс услуг, направленных на тщательное изучение и оценку различных показателей (от технических до финансовых) инвестиционного проекта строительства на любых этапах жизненного цикла строительного проекта.
                        </p>
                    </div>
                </div>
            </div>
            <div class="si_text">
                <div class="si_t">
                    <a><i class="fa fa-calendar-check-o" aria-hidden="true"></i></a>
                    <div style="display: block">
                        <p class="si_tm">Юридическое сопровождение</p>
                        <p>
                            Привлекая экспертную службу строительного контроля для надзора за обеспечением качества работ в строительстве, Заказчик избавляет себя от таких проблем, как брак, дефекты и недоделки на стройплощадке.
                        </p>
                    </div>
                </div>
                <div class="si_t">
                    <a><i class="fa fa-camera" aria-hidden="true"></i></a>
                    <div style="display: block">
                        <p class="si_tm">Контроль качества</p>
                        <p>
                            Привлекая экспертную службу строительного контроля для надзора за обеспечением качества работ в строительстве, Заказчик избавляет себя от таких проблем, как брак, дефекты и недоделки на стройплощадке.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
