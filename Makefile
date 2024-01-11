# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Makefile                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: stribuzi <stribuzi@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/08/31 13:07:26 by stribuzi          #+#    #+#              #
#    Updated: 2021/11/05 03:43:29 by stribuzi         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #


all:			
				docker-compose up -d

mount:
			sudo mount -t vboxsf sharing_inception /home/$USER/Desktop	

clean:
				docker-compose down

fclean:			clean
				

re:				fclean

.PHONY:			all clean fclean re