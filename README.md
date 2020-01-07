# Green Furniture Web Site

# 1. 개발 환경 구축
## 1.1 Wampserver 설치
WampServer는 Apache2, PHP, MySQL 및 MariaDB를 사용하여 동적 웹 응용 프로그램을 만들 수 있는 Windows의 웹 개발 플랫폼이다.
<br>
WampServer는 웹 애플리케이션을 직관적으로 개발하기 위해 필요한 모든 것을 자동으로 설치한다.
<br>
 

<a href="http://www.wampserver.com/en/download-wampserver-64bits/" target="_blank">http://www.wampserver.com/en/download-wampserver-64bits/</a>
에 접속하여 버전에 맞는 WampServer를 다운로드 한다.<br>
<img src="https://user-images.githubusercontent.com/48309721/71797583-36256400-3092-11ea-9e4f-2f6124252544.JPG" width="600"></img>
___
다운로드된 설치파일을 실행하면 설치 과정이 자동으로 진행된다.<br>
<img src="https://user-images.githubusercontent.com/48309721/71798067-00817a80-3094-11ea-9a37-1e5a26cea158.JPG" width="300"></img>

인터넷 익스플로러가 아닌 다른 웹브라우저를 WampServer에서 사용하는 디폴트 웹브라우저로 지정하려면 "예" 를 선택한다.<br>
<img src="https://user-images.githubusercontent.com/48309721/71798069-011a1100-3094-11ea-8c89-47c1cde50b0b.JPG" width="300"></img>

노트패드가 아닌 다른 편집기를 WampServer에서 사용하는 디폴트 웹브라우저로 지정하려면 "예" 를 선택한다.<br>
<img src="https://user-images.githubusercontent.com/48309721/71798070-011a1100-3094-11ea-8edb-c8d6dc530d63.JPG" width="300"></img>

Windows 보안 경고 창에서 아파치 웹서버에 접근할 수 있게 허용할 네트워크를 묻는데 보통 사용하는 곳이 공공장소라면 두번째 항목, 집 같은 곳에서 사용한다면 첫번째 항목을 선택한다.<br>
<img src="https://user-images.githubusercontent.com/48309721/71798071-011a1100-3094-11ea-9955-83bfd0080baa.JPG" width="450"></img>

바탕화면에 생긴 단축 아이콘이나 시작 메뉴에서 Wampserver64를 검색하여 실행한다.<br>
<img src="https://user-images.githubusercontent.com/48309721/71798072-01b2a780-3094-11ea-9081-32113e93867c.JPG" width="100"></img>

오른쪽 아래 시계옆에 Wampserver 상태를 트레이 아이콘으로 표시해준다.<br>
<img src="https://user-images.githubusercontent.com/48309721/71798432-5e629200-3095-11ea-8866-d9450fc32922.JPG" width="300"></img>

붉은색은 Wampserver가 제공하는 모든 서비스가 중단된 상태이다.<br>
<img src="https://user-images.githubusercontent.com/48309721/71798078-09724c00-3094-11ea-84d2-a47b80a130e4.JPG" width="70"></img>

주황색일 경우 일부 서비스만 실행되고 있는 상태이다.<br>
<img src="https://user-images.githubusercontent.com/48309721/71798079-0a0ae280-3094-11ea-9815-96a6f4ad8874.JPG" width="70"></img>

초록색은 모든 서비스가 문제 없이 동작 중인 상태이다.<br>
<img src="https://user-images.githubusercontent.com/48309721/71798080-0a0ae280-3094-11ea-98ab-a5b00ac2cb5e.JPG" width="70"></img>

설치된 wamp64의 www경로에 assets폴더와 project폴더를 넣어준다. 주소창에 localhost/project 경로를 검색하면 project폴더에있는 index.php파일이 실행된다. assets에는 layout 관련 폴더들이 들어있는데, 이 폴더들은 project폴더 안의 php 파일에서 불러온다.<br>
<img src="https://user-images.githubusercontent.com/48309721/71799939-05e1c380-309a-11ea-8f5c-ef1490aae89c.JPG" width="700"></img>


## 1.2 데이터 베이스 생성
Wampserver설치시 함께 설치된 DB에 phpmyadmin 으로 접근하기 위해서는 id와 password를 알아야 한다.
초기 등록되어있는 아이디는 'root'이고 password는 공백이다.
root 사용자의 암호를 지정하기 위해서 WampServer 트레이 아이콘 위에서 마우스 왼쪽 버튼을 클릭하면 보이는 메뉴에서 MariaDB > MariaDB console을 선택한다.

<img src="https://user-images.githubusercontent.com/48309721/71802748-0ed69300-30a2-11ea-9837-a88c8d120bbe.JPG" width="300"></img><br>
로그인할 사용자 이름이 root 로 되어있는데, 변경하지 않고 OK버튼을 클릭해준다.

초기에는 암호가 지정되어 있지 않기 때문에 Enter password:에서 엔터만 입력하면 로그인이 된다.

암호를 지정하기 위해 다음 명령어를 실행시킨다.
```
SET PASSWORD FOR root@localhost = PASSWORD('your_root_password');
```
주소창에 localhost/phpmyadmin을 검색하면 나오는 다음 창에서 아이디 root와 설정해준 비밀번호를 입력하여 DB에 접속한다.
<img src="https://user-images.githubusercontent.com/48309721/71802945-ba7fe300-30a2-11ea-8575-278c55720ad4.JPG" width="500"></img><br>
<img src="https://user-images.githubusercontent.com/48309721/71803021-f6b34380-30a2-11ea-9dbe-e22ed2f5edb3.JPG" width=""></img><br>
<img src="https://user-images.githubusercontent.com/48309721/71803185-67f2f680-30a3-11ea-8da5-1ec69b2228b1.JPG" width="500"></img><br>
데이터베이스메뉴에있는 새 데이터베이스 만들기를 이용하여 'project'라는 이름의 데이터베이스를 생성해준다.
* 로그인 회원가입 관련 table생성<br>
<img src="https://user-images.githubusercontent.com/48309721/71803519-53fbc480-30a4-11ea-8da2-c12fc1a1f81e.JPG" width="300"></img><br>
생성된 project DB에 새 테이블 만들기를 이용하여 'user_info" 테이블을 생성해 준다. 
<img src="https://user-images.githubusercontent.com/48309721/71803463-3169ab80-30a4-11ea-8eb8-204d30f19358.JPG" width=""></img><br>
실행을 누르면 나오는 창에서 다음과 같이 입력해주고 저장을 누르면 테이블이 생성된다.
<img src="https://user-images.githubusercontent.com/48309721/71803609-97563300-30a4-11ea-8fac-ccc90b26c07c.JPG" height="100"></img><br>

* 게시판 관련 table생성<br>
홈페이지에 필요한 게시판은 그린의 가구, 주문문의, 고객상담, A/S접수, 공지사항, 고객후기, 전체글 이렇게 7개 이다.<br>
<img src="https://user-images.githubusercontent.com/48309721/71807491-c7a2cf00-30ae-11ea-8d04-ba711b0c8be4.JPG" ></img><br>
위의 그림은 all_question 테이블 생성과정이다 위의 그림과 같은 칼럼내용으로 all_question, a_s, customer_reviews, notice, order_inquiry, user_info 테이블을 생성해준다.
<br>
