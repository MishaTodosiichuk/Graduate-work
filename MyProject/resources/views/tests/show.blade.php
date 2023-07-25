@extends('layouts.default')

@section('content')
    <div class="main-wrapper container ">
        <main class="left">
            <div id="test_info">
                <div class="separete img">
                    <img src="../../../img/Tests/{{$test->image}}" alt="{{$test->title}}" title="{{$test->title}}">
                </div>
                <div class="separete">
                    <h2>{{$test->title}}</h2>
                    <span class="hardness">Складність:
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </span>
                </div>
            </div>
            <div id="navigation">
                <h2>Інші тести</h2>
                <ul>
                    <div>
                        @if($test->start_lvl)
                            <a href="#">
                                <li class="active">Початковий рівень</li>
                            </a>
                        @endif
                        <div style="clear:both"></div>
                        @if($test->middle_lvl)
                            <a href="#">
                                <li>Середній рівень</li>
                            </a>
                        @endif
                        <div style="clear:both"></div>
                        @if($test->hard_lvl)
                            <a href="#">
                                <li>Важкий рівень</li>
                            </a>
                        @endif
                    </div>
                </ul>
            </div>
        </main>
        <aside style="width: 56%">
            <div style="font-size: 20px">
                <div class="container d-flex justify-content-center">
                    <div class="quiz" id="quiz">
                        <div class="quiz-question" id="questions"></div>
                        <div class="quiz-indicator" id="indicator">

                        </div>
                        <div class="quiz-results" id="results">

                        </div>
                        <div id="mark">

                        </div>
                        <div class="quiz-controls">
                            <button class="btn btn-danger btn-next" id="btn-next" disabled>Далі</button>
                            <button class="btn btn-danger btn-restart" id="btn-restart">Рестарт</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comments mt-3">
                <span class="form-button pre_code"><i class="fas fa-code"></i></span><b> Коментарі </b>
                <form action="" method="post">
                    @csrf
                    <textarea placeholder="Введіть тут коментар..." id="content" name="content"></textarea>
                    <input type="hidden" name="news_id" id="news_id" value="{{ $test->id }}">
                    @if(auth()->user())
                        <input type="hidden" name="user_name" id="user_name" value="{{ Auth()->user()->name }}">
                    @endif
                    <div style="clear: both"></div>
                    <button class="btn btn-danger" type="submit">Додати коментар</button>
                </form>
                <hr>
                <div style="clear: both"></div>
                <div class="all-comments">
                    @foreach($reviews as $data)
                        <div class="comment">
                            <p class="user-name "><b>{{$data->user_name}}</b> {{$data->updated_at}}</p>
                            <div class="main-block">{{$data->content}}</div>
                        </div>
                        @if(auth()->user()->role === 0 || auth()->user()->name === $data->user_name)
                            <div class="mt-3">
                                <form action="{{ route('reviews.news.destroy', $data->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="Видалити">
                                </form>
                            </div>
                            <hr>
                        @else
                            <hr>
                        @endif
                    @endforeach
                </div>
            </div>
        </aside>
        <style>
            .quiz {
                margin: 0 auto;
                width: 100%;
            }

            .quiz-question,
            .quiz-indicator,
            .quiz-results {
                margin-bottom: 20px;
            }

            .quiz-question-item__question,
            .quiz-results-item__question {
                font-size: 20px;
                margin-bottom: 20px;
            }

            .quiz-question-item__answers,
            .quiz-results-item__answers {
                margin: 0;
                padding: 0;
                list-style: none;
            }

            .btn-restart {
                display: none;
            }

            .questions-hidden,
            .indicator-hidden,
            .btn-next-hidden {
                display: none;
            }

            .result-visible,
            .btn-restart-visible {
                display: block;
            }

            .answer--valid {
                color: #22a922;
            }

            .answer--invalid {
                color: #e19292;
            }
        </style>
        <script>
            let i = 0;
            const DATA = [
                    @foreach($tasks as $data)
                {
                    questions: '{{$data->task}}',
                    answers: [
                        {
                            id: i = i + 1,
                            value: '{{$data->Answer1}}',
                            @if($data->RightAnswer === 1) right: true,
                            @else right: false,
                            @endif
                        },
                        {
                            id: i = i + 1,
                            value: '{{$data->Answer2}}',
                            @if($data->RightAnswer === 2) right: true,
                            @else right: false,
                            @endif
                        },
                        {
                            id: i = i + 1,
                            value: '{{$data->Answer3}}',
                            @if($data->RightAnswer === 3) right: true,
                            @else right: false,
                            @endif
                        },
                    ]
                },
                @endforeach
            ];
            let localResults = {};

            const quiz = document.getElementById('quiz');
            const questions = document.getElementById('questions');
            const indicator = document.getElementById('indicator');
            const results = document.getElementById('results');
            const btnNext = document.getElementById('btn-next');
            const btnRestart = document.getElementById('btn-restart');

            const renderQuestion = (index) => {
                renderIndicator(index + 1);

                questions.dataset.currentStep = index;

                const renderAnswers = () => DATA[index].answers
                    .map((answer) => `
                    <li>
                        <label>
                            <input class="answer-input" type="radio" name=${index} value=${answer.id}>
                            ${answer.value}
                        </label>
                    </li>
                `)
                    .join('');

                questions.innerHTML = `<div class="quiz-question-item">
                <div class="quiz-question-item__question"><h1>${DATA[index].questions}</h1></div>
                <ul class="quiz-question-item__answers">${renderAnswers()}</ul>
            </div>`;
            };
            const renderResults = () => {
                let content = '';
                let mark = 0;

                const getClassname = (answer, questionIndex) => {
                    let classname = '';
                    if (!answer.right && answer.id === localResults[questionIndex]) {
                        classname = 'answer--invalid';
                    } else if (answer.right) {
                        classname = 'answer--valid';
                    }
                    return classname;
                };

                const getAnswers = (questionIndex) => DATA[questionIndex].answers
                    .map((answer) => `<li class=${getClassname(answer, questionIndex)}>${answer.value}</li>`)
                    .join('');

                DATA.forEach((question, index) => {
                    content += `
                <div class="quiz-results-item">
                    <div class="quiz-results-item__question">${question.questions}</div>
                    <ul class="quiz-results-item__answers">${getAnswers(index)}</ul>
                </div>
                `;
                });

                results.innerHTML = content;
            };

            const renderIndicator = (currentStep) => {
                indicator.innerHTML = `${currentStep}/${DATA.length}`
            };

            quiz.addEventListener('change', (event) => {
                if (event.target.classList.contains('answer-input')) {
                    localResults[event.target.name] = event.target.value;
                    btnNext.disabled = false;
                }
            });

            quiz.addEventListener('click', (event) => {
                if (event.target.classList.contains('btn-next')) {
                    const nextQuestionIndex = Number(questions.dataset.currentStep) + 1;

                    if (DATA.length === nextQuestionIndex) {
                        questions.classList.add('questions-hidden');
                        indicator.classList.add('indicator-hidden');
                        results.classList.add('results-visible');
                        btnNext.classList.add('btn-next-hidden');
                        btnRestart.classList.add('btn-restart-visible');

                        renderResults();
                    } else {
                        renderQuestion(nextQuestionIndex);
                    }

                    btnNext.disabled = true;
                }

                if (event.target.classList.contains('btn-restart')) {
                    localResults = {};
                    results.innerHTML = '';

                    questions.classList.remove('questions-hidden');
                    indicator.classList.remove('indicator-hidden');
                    results.classList.remove('results-visible');
                    btnNext.classList.remove('btn-next-hidden');
                    btnRestart.classList.remove('btn-restart-visible');

                    renderQuestion(0);
                }
            });
            renderQuestion(0);
        </script>
@endsection

